<?php

namespace Misakstvanu\LaravelSkautis\Support;

use DateTimeInterface;
use DateTimeZone;
use Illuminate\Support\Facades\Session;
use Skautis\SessionAdapter\AdapterInterface;

/**
 * Laravel session adapter for SkautIS SDK.
 * Bridges the SkautIS library session interface with Laravel's session.
 *
 * Laravel 13 serializes session data as JSON, so PHP objects do not survive a
 * round trip. The SDK keeps a \DateTime (logout date) in its login data, which
 * is stored here as a tagged ISO-8601 string and rebuilt on the way out.
 */
class LaravelSessionAdapter implements AdapterInterface
{
    private const PREFIX = 'skautis.';

    private const DATETIME_KEY = '__skautis_datetime';

    private const TIMEZONE_KEY = '__skautis_timezone';

    public function set($name, $object): void
    {
        Session::put(self::PREFIX.$name, $this->freeze($object));
    }

    public function has($name): bool
    {
        return Session::has(self::PREFIX.$name);
    }

    public function get($name): mixed
    {
        return $this->thaw(Session::get(self::PREFIX.$name));
    }

    /**
     * Replace DateTime instances (one level deep, as the SDK stores them) with
     * a JSON-safe representation.
     */
    private function freeze(mixed $value): mixed
    {
        if ($value instanceof DateTimeInterface) {
            return [
                self::DATETIME_KEY => $value->format(DateTimeInterface::RFC3339_EXTENDED),
                self::TIMEZONE_KEY => $value->getTimezone()->getName(),
            ];
        }

        if (is_array($value)) {
            return array_map(fn (mixed $item): mixed => $this->freeze($item), $value);
        }

        return $value;
    }

    /**
     * Rebuild the DateTime instances `freeze()` flattened.
     */
    private function thaw(mixed $value): mixed
    {
        if (! is_array($value)) {
            return $value;
        }

        if (isset($value[self::DATETIME_KEY]) && is_string($value[self::DATETIME_KEY])) {
            $date = new \DateTime($value[self::DATETIME_KEY]);
            $timezone = $value[self::TIMEZONE_KEY] ?? null;

            if (is_string($timezone) && $timezone !== '') {
                try {
                    $date->setTimezone(new DateTimeZone($timezone));
                } catch (\Exception) {
                    // Unknown zone name: the offset in the string already made the instant right.
                }
            }

            return $date;
        }

        return array_map(fn (mixed $item): mixed => $this->thaw($item), $value);
    }
}
