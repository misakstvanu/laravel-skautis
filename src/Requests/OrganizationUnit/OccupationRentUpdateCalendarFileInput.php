<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class OccupationRentUpdateCalendarFileInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $id = null,
        public readonly ?string $idTempFile = null,
        public readonly ?string $idTempFileAdmin = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            'ID_TempFile' => $this->idTempFile,
            'ID_TempFileAdmin' => $this->idTempFileAdmin,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
