<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitRegistrationDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $idUnitType = null,
        public readonly ?int $year = null,
        public readonly ?string $instructions = null,
        public readonly ?string $dateChecked = null,
        public readonly ?string $dateConfirmed = null,
        public readonly ?bool $isDelivered = null,
        public readonly ?bool $isAccepted = null,
        public readonly ?bool $showServices = null,
        public readonly ?int $idUnitRegistrationParent = null,
        public readonly ?string $unitRegistrationParent = null,
        public readonly ?string $instructionsParent = null,
        public readonly ?bool $parentIsDelivered = null,
        public readonly ?bool $parentIsAccepted = null,
        public readonly ?bool $parentHasCreated = null,
        public readonly ?bool $parentShowServices = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idUnitType: isset($obj->{'ID_UnitType'}) ? (string) $obj->{'ID_UnitType'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            instructions: isset($obj->{'Instructions'}) ? (string) $obj->{'Instructions'} : null,
            dateChecked: isset($obj->{'DateChecked'}) ? (string) $obj->{'DateChecked'} : null,
            dateConfirmed: isset($obj->{'DateConfirmed'}) ? (string) $obj->{'DateConfirmed'} : null,
            isDelivered: isset($obj->{'IsDelivered'}) ? (bool) $obj->{'IsDelivered'} : null,
            isAccepted: isset($obj->{'IsAccepted'}) ? (bool) $obj->{'IsAccepted'} : null,
            showServices: isset($obj->{'ShowServices'}) ? (bool) $obj->{'ShowServices'} : null,
            idUnitRegistrationParent: isset($obj->{'ID_UnitRegistrationParent'}) ? (int) $obj->{'ID_UnitRegistrationParent'} : null,
            unitRegistrationParent: isset($obj->{'UnitRegistrationParent'}) ? (string) $obj->{'UnitRegistrationParent'} : null,
            instructionsParent: isset($obj->{'InstructionsParent'}) ? (string) $obj->{'InstructionsParent'} : null,
            parentIsDelivered: isset($obj->{'ParentIsDelivered'}) ? (bool) $obj->{'ParentIsDelivered'} : null,
            parentIsAccepted: isset($obj->{'ParentIsAccepted'}) ? (bool) $obj->{'ParentIsAccepted'} : null,
            parentHasCreated: isset($obj->{'ParentHasCreated'}) ? (bool) $obj->{'ParentHasCreated'} : null,
            parentShowServices: isset($obj->{'ParentShowServices'}) ? (bool) $obj->{'ParentShowServices'} : null,
        );
    }
}
