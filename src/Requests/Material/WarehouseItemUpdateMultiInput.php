<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class WarehouseItemUpdateMultiInput
{
    public function __construct(
        public readonly ?int $int = null,
        public readonly ?string $string = null,
        public readonly ?string $dateTime = null,
        public readonly ?float $decimal = null,
        public readonly ?bool $boolean = null,
        public readonly ?string $guid = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'int' => $this->int,
            'string' => $this->string,
            'dateTime' => $this->dateTime,
            'decimal' => $this->decimal,
            'boolean' => $this->boolean,
            'guid' => $this->guid,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
