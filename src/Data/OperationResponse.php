<?php
namespace Misakstvanu\LaravelSkautis\Data;
/**
 * Generic wrapper around raw SOAP response data.
 */
final class OperationResponse
{
    private function __construct(private readonly mixed $raw) {}
    public static function from(mixed $raw): self
    {
        return new self($raw);
    }
    public function raw(): mixed
    {
        return $this->raw;
    }
    public function firstObject(): ?\stdClass
    {
        if (is_array($this->raw) && isset($this->raw[0]) && $this->raw[0] instanceof \stdClass) {
            return $this->raw[0];
        }
        return $this->raw instanceof \stdClass ? $this->raw : null;
    }
    /** @return \stdClass[] */
    public function objects(): array
    {
        if (is_array($this->raw)) {
            return array_values(array_filter($this->raw, static fn (mixed $item): bool => $item instanceof \stdClass));
        }
        return $this->raw instanceof \stdClass ? [$this->raw] : [];
    }
}
