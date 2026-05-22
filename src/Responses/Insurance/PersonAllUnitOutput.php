<?php

namespace Misakstvanu\LaravelSkautis\Responses\Insurance;

final class PersonAllUnitOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $person = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $unitWithRegistrationNumber = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?int $idFunction = null,
        public readonly ?string $functionType = null,
        public readonly ?string $insuranceValidTo = null,
        public readonly ?bool $isInsured = null,
        public readonly ?bool $isAutoInsured = null,
        public readonly ?bool $canBeInsured = null,
        public readonly ?string $birthday = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            unitWithRegistrationNumber: isset($obj->{'UnitWithRegistrationNumber'}) ? (string) $obj->{'UnitWithRegistrationNumber'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idFunction: isset($obj->{'ID_Function'}) ? (int) $obj->{'ID_Function'} : null,
            functionType: isset($obj->{'FunctionType'}) ? (string) $obj->{'FunctionType'} : null,
            insuranceValidTo: isset($obj->{'InsuranceValidTo'}) ? (string) $obj->{'InsuranceValidTo'} : null,
            isInsured: isset($obj->{'IsInsured'}) ? (bool) $obj->{'IsInsured'} : null,
            isAutoInsured: isset($obj->{'IsAutoInsured'}) ? (bool) $obj->{'IsAutoInsured'} : null,
            canBeInsured: isset($obj->{'CanBeInsured'}) ? (bool) $obj->{'CanBeInsured'} : null,
            birthday: isset($obj->{'Birthday'}) ? (string) $obj->{'Birthday'} : null,
        );
    }
}
