<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class WorkspaceUnitAllUnitInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idPerson = null,
        public readonly ?bool $searchParent = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_Person' => $this->idPerson,
            'SearchParent' => $this->searchParent,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
