<?php
namespace Misakstvanu\LaravelSkautis\Support;
use Illuminate\Support\Facades\Session;
use Skautis\SessionAdapter\AdapterInterface;
/**
 * Laravel session adapter for SkautIS SDK.
 * Bridges the SkautIS library session interface with Laravel's session.
 */
class LaravelSessionAdapter implements AdapterInterface
{
    private const PREFIX = 'skautis.';
    public function set($name, $object): void
    {
        Session::put(self::PREFIX.$name, $object);
    }
    public function has($name): bool
    {
        return Session::has(self::PREFIX.$name);
    }
    public function get($name): mixed
    {
        return Session::get(self::PREFIX.$name);
    }
}
