<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitStampUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $idStampType = null,
        public readonly ?string $stampType = null,
        public readonly ?int $count = null,
        public readonly ?string $email = null,
        public readonly ?string $web = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'RegistrationNumber' => $this->registrationNumber,
            'ID_StampType' => $this->idStampType,
            'StampType' => $this->stampType,
            'Count' => $this->count,
            'Email' => $this->email,
            'Web' => $this->web,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
