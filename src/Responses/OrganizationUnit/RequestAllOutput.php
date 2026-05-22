<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class RequestAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $reason = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $idMembershipType = null,
        public readonly ?string $membershipType = null,
        public readonly ?string $idMembershipCategory = null,
        public readonly ?string $membershipCategory = null,
        public readonly ?int $idUserCreate = null,
        public readonly ?int $idPersonCreate = null,
        public readonly ?string $personCreate = null,
        public readonly ?string $dateCreate = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $idRequestState = null,
        public readonly ?string $requestState = null,
        public readonly ?int $idUserDecision = null,
        public readonly ?int $idPersonDecision = null,
        public readonly ?string $personDecision = null,
        public readonly ?string $dateDecision = null,
        public readonly ?string $decision = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            reason: isset($obj->{'Reason'}) ? (string) $obj->{'Reason'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            idMembershipType: isset($obj->{'ID_MembershipType'}) ? (string) $obj->{'ID_MembershipType'} : null,
            membershipType: isset($obj->{'MembershipType'}) ? (string) $obj->{'MembershipType'} : null,
            idMembershipCategory: isset($obj->{'ID_MembershipCategory'}) ? (string) $obj->{'ID_MembershipCategory'} : null,
            membershipCategory: isset($obj->{'MembershipCategory'}) ? (string) $obj->{'MembershipCategory'} : null,
            idUserCreate: isset($obj->{'ID_UserCreate'}) ? (int) $obj->{'ID_UserCreate'} : null,
            idPersonCreate: isset($obj->{'ID_PersonCreate'}) ? (int) $obj->{'ID_PersonCreate'} : null,
            personCreate: isset($obj->{'PersonCreate'}) ? (string) $obj->{'PersonCreate'} : null,
            dateCreate: isset($obj->{'DateCreate'}) ? (string) $obj->{'DateCreate'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idRequestState: isset($obj->{'ID_RequestState'}) ? (string) $obj->{'ID_RequestState'} : null,
            requestState: isset($obj->{'RequestState'}) ? (string) $obj->{'RequestState'} : null,
            idUserDecision: isset($obj->{'ID_UserDecision'}) ? (int) $obj->{'ID_UserDecision'} : null,
            idPersonDecision: isset($obj->{'ID_PersonDecision'}) ? (int) $obj->{'ID_PersonDecision'} : null,
            personDecision: isset($obj->{'PersonDecision'}) ? (string) $obj->{'PersonDecision'} : null,
            dateDecision: isset($obj->{'DateDecision'}) ? (string) $obj->{'DateDecision'} : null,
            decision: isset($obj->{'Decision'}) ? (string) $obj->{'Decision'} : null,
        );
    }
}
