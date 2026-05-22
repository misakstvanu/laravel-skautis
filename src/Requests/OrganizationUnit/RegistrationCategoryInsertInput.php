<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class RegistrationCategoryInsertInput
{
    public function __construct(
        public readonly ?int $idUnitRegistration = null,
        public readonly ?int $idRegistrationCategoryParent = null,
        public readonly ?float $amount = null,
        public readonly ?bool $isAfterDeadline = null,
        public readonly ?bool $isJournal = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idMembershipType = null,
        public readonly ?string $note = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_UnitRegistration' => $this->idUnitRegistration,
            'ID_RegistrationCategoryParent' => $this->idRegistrationCategoryParent,
            'Amount' => $this->amount,
            'IsAfterDeadline' => $this->isAfterDeadline,
            'IsJournal' => $this->isJournal,
            'DisplayName' => $this->displayName,
            'ID_MembershipType' => $this->idMembershipType,
            'Note' => $this->note,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
