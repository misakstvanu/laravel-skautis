<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonMistakeReportDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $idUnitRegistration = null,
        public readonly ?string $unitRegistrationNumber = null,
        public readonly ?string $unit = null,
        public readonly ?int $idMistake = null,
        public readonly ?string $mistake = null,
        public readonly ?string $displayName = null,
        public readonly ?string $parentComment = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            idUnitRegistration: isset($obj->{'ID_UnitRegistration'}) ? (int) $obj->{'ID_UnitRegistration'} : null,
            unitRegistrationNumber: isset($obj->{'UnitRegistrationNumber'}) ? (string) $obj->{'UnitRegistrationNumber'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            idMistake: isset($obj->{'ID_Mistake'}) ? (int) $obj->{'ID_Mistake'} : null,
            mistake: isset($obj->{'Mistake'}) ? (string) $obj->{'Mistake'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            parentComment: isset($obj->{'ParentComment'}) ? (string) $obj->{'ParentComment'} : null,
        );
    }
}
