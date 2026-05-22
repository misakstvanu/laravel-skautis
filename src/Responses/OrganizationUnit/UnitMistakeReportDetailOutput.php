<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitMistakeReportDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
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
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idMistake: isset($obj->{'ID_Mistake'}) ? (int) $obj->{'ID_Mistake'} : null,
            mistake: isset($obj->{'Mistake'}) ? (string) $obj->{'Mistake'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            parentComment: isset($obj->{'ParentComment'}) ? (string) $obj->{'ParentComment'} : null,
        );
    }
}
