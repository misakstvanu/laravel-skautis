<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class SharedDriveAllEventsInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $addSystemItem = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'DisplayName' => $this->displayName,
            'AddSystemItem' => $this->addSystemItem,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
