<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class RegistryAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $sequence = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $unitWithRegistrationNumber = null,
        public readonly ?string $idRegistryObject = null,
        public readonly ?string $registryObject = null,
        public readonly ?string $idRegistryType = null,
        public readonly ?string $registryType = null,
        public readonly ?string $idRegistryState = null,
        public readonly ?string $registryState = null,
        public readonly ?int $oldHistoryObjectId = null,
        public readonly ?int $newHistoryObjectId = null,
        public readonly ?int $idPersonCreate = null,
        public readonly ?string $personCreate = null,
        public readonly ?string $dateCreate = null,
        public readonly ?int $idFunctionType = null,
        public readonly ?string $functionType = null,
        public readonly ?int $idPersonSolving = null,
        public readonly ?string $personSolving = null,
        public readonly ?string $dateSolving = null,
        public readonly ?int $idPersonSent = null,
        public readonly ?string $personSent = null,
        public readonly ?string $dateSent = null,
        public readonly ?string $note = null,
        public readonly ?string $personFunction = null,
        public readonly ?int $idPersonFunction = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            sequence: isset($obj->{'Sequence'}) ? (int) $obj->{'Sequence'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            unitWithRegistrationNumber: isset($obj->{'UnitWithRegistrationNumber'}) ? (string) $obj->{'UnitWithRegistrationNumber'} : null,
            idRegistryObject: isset($obj->{'ID_RegistryObject'}) ? (string) $obj->{'ID_RegistryObject'} : null,
            registryObject: isset($obj->{'RegistryObject'}) ? (string) $obj->{'RegistryObject'} : null,
            idRegistryType: isset($obj->{'ID_RegistryType'}) ? (string) $obj->{'ID_RegistryType'} : null,
            registryType: isset($obj->{'RegistryType'}) ? (string) $obj->{'RegistryType'} : null,
            idRegistryState: isset($obj->{'ID_RegistryState'}) ? (string) $obj->{'ID_RegistryState'} : null,
            registryState: isset($obj->{'RegistryState'}) ? (string) $obj->{'RegistryState'} : null,
            oldHistoryObjectId: isset($obj->{'OldHistoryObjectId'}) ? (int) $obj->{'OldHistoryObjectId'} : null,
            newHistoryObjectId: isset($obj->{'NewHistoryObjectId'}) ? (int) $obj->{'NewHistoryObjectId'} : null,
            idPersonCreate: isset($obj->{'ID_PersonCreate'}) ? (int) $obj->{'ID_PersonCreate'} : null,
            personCreate: isset($obj->{'PersonCreate'}) ? (string) $obj->{'PersonCreate'} : null,
            dateCreate: isset($obj->{'DateCreate'}) ? (string) $obj->{'DateCreate'} : null,
            idFunctionType: isset($obj->{'ID_FunctionType'}) ? (int) $obj->{'ID_FunctionType'} : null,
            functionType: isset($obj->{'FunctionType'}) ? (string) $obj->{'FunctionType'} : null,
            idPersonSolving: isset($obj->{'ID_PersonSolving'}) ? (int) $obj->{'ID_PersonSolving'} : null,
            personSolving: isset($obj->{'PersonSolving'}) ? (string) $obj->{'PersonSolving'} : null,
            dateSolving: isset($obj->{'DateSolving'}) ? (string) $obj->{'DateSolving'} : null,
            idPersonSent: isset($obj->{'ID_PersonSent'}) ? (int) $obj->{'ID_PersonSent'} : null,
            personSent: isset($obj->{'PersonSent'}) ? (string) $obj->{'PersonSent'} : null,
            dateSent: isset($obj->{'DateSent'}) ? (string) $obj->{'DateSent'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            personFunction: isset($obj->{'PersonFunction'}) ? (string) $obj->{'PersonFunction'} : null,
            idPersonFunction: isset($obj->{'ID_PersonFunction'}) ? (int) $obj->{'ID_PersonFunction'} : null,
        );
    }
}
