<?php
namespace Misakstvanu\LaravelSkautis\Data;
use InvalidArgumentException;
/**
 * Generic operation request wrapper - used internally to pass field arrays to the SOAP executor.
 */
final class OperationRequest
{
    /** @param array<string, mixed> $fields */
    private function __construct(private readonly array $fields) {}
    public static function empty(): self
    {
        return new self([]);
    }
    /** @param array<string, mixed>|null $payload */
    public static function from(mixed $payload): self
    {
        if ($payload instanceof self) {
            return $payload;
        }
        if ($payload === null) {
            return self::empty();
        }
        if (is_array($payload)) {
            return new self($payload);
        }
        if (is_object($payload)) {
            /** @var array<string, mixed> $data */
            $data = get_object_vars($payload);
            return new self($data);
        }
        throw new InvalidArgumentException('OperationRequest::from() accepts array, object or null.');
    }
    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return $this->fields;
    }
}
