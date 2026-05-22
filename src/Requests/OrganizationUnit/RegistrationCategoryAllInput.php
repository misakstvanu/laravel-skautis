<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class RegistrationCategoryAllInput
{
    public function __construct(
        public readonly ?int $idUnitRegistration = null,
        public readonly ?int $idRegistrationCategoryParent = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idMembershipType = null,
        public readonly ?bool $showParentUnit = null,
        public readonly ?bool $showUsable = null,
        public readonly ?bool $isAfterDeadline = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_UnitRegistration' => $this->idUnitRegistration,
            'ID_RegistrationCategoryParent' => $this->idRegistrationCategoryParent,
            'DisplayName' => $this->displayName,
            'ID_MembershipType' => $this->idMembershipType,
            'ShowParentUnit' => $this->showParentUnit,
            'ShowUsable' => $this->showUsable,
            'IsAfterDeadline' => $this->isAfterDeadline,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
