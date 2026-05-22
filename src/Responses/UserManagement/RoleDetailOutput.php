<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class RoleDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idGroupType = null,
        public readonly ?string $groupType = null,
        public readonly ?string $idUnitType = null,
        public readonly ?string $unitType = null,
        public readonly ?bool $isHidden = null,
        public readonly ?bool $isTwoFactorRequired = null,
        public readonly ?string $color = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idGroupType: isset($obj->{'ID_GroupType'}) ? (string) $obj->{'ID_GroupType'} : null,
            groupType: isset($obj->{'GroupType'}) ? (string) $obj->{'GroupType'} : null,
            idUnitType: isset($obj->{'ID_UnitType'}) ? (string) $obj->{'ID_UnitType'} : null,
            unitType: isset($obj->{'UnitType'}) ? (string) $obj->{'UnitType'} : null,
            isHidden: isset($obj->{'IsHidden'}) ? (bool) $obj->{'IsHidden'} : null,
            isTwoFactorRequired: isset($obj->{'IsTwoFactorRequired'}) ? (bool) $obj->{'IsTwoFactorRequired'} : null,
            color: isset($obj->{'Color'}) ? (string) $obj->{'Color'} : null,
        );
    }
}
