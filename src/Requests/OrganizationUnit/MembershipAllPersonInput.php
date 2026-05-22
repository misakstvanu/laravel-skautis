<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class MembershipAllPersonInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $idMembershipType = null,
        public readonly ?string $idMembershipCategory = null,
        public readonly ?bool $showHistory = null,
        public readonly ?bool $isValid = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'ID_Unit' => $this->idUnit,
            'ID_MembershipType' => $this->idMembershipType,
            'ID_MembershipCategory' => $this->idMembershipCategory,
            'ShowHistory' => $this->showHistory,
            'IsValid' => $this->isValid,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
