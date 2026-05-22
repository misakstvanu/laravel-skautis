<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class OccupationRentLanguageAllInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $idOccupation = null,
        public readonly ?int $id = null,
        public readonly ?string $idOccupationLanguage = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID_Occupation' => $this->idOccupation,
            'ID' => $this->id,
            'ID_OccupationLanguage' => $this->idOccupationLanguage,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
