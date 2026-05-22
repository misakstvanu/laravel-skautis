<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class RegistrationCategoryAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idUnitRegistration = null,
        public readonly ?int $idRegistrationCategoryParent = null,
        public readonly ?string $idMembershipType = null,
        public readonly ?string $membershipType = null,
        public readonly ?bool $isAfterDeadline = null,
        public readonly ?bool $isJournal = null,
        public readonly ?float $amount = null,
        public readonly ?float $amountTotal = null,
        public readonly ?string $note = null,
        public readonly ?bool $isUsed = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idUnitRegistration: isset($obj->{'ID_UnitRegistration'}) ? (int) $obj->{'ID_UnitRegistration'} : null,
            idRegistrationCategoryParent: isset($obj->{'ID_RegistrationCategoryParent'}) ? (int) $obj->{'ID_RegistrationCategoryParent'} : null,
            idMembershipType: isset($obj->{'ID_MembershipType'}) ? (string) $obj->{'ID_MembershipType'} : null,
            membershipType: isset($obj->{'MembershipType'}) ? (string) $obj->{'MembershipType'} : null,
            isAfterDeadline: isset($obj->{'IsAfterDeadline'}) ? (bool) $obj->{'IsAfterDeadline'} : null,
            isJournal: isset($obj->{'IsJournal'}) ? (bool) $obj->{'IsJournal'} : null,
            amount: isset($obj->{'Amount'}) ? (float) $obj->{'Amount'} : null,
            amountTotal: isset($obj->{'AmountTotal'}) ? (float) $obj->{'AmountTotal'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            isUsed: isset($obj->{'IsUsed'}) ? (bool) $obj->{'IsUsed'} : null,
        );
    }
}
