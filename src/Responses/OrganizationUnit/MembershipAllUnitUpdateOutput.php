<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class MembershipAllUnitUpdateOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $birthday = null,
        public readonly ?string $idMembershipType = null,
        public readonly ?string $membershipType = null,
        public readonly ?string $idMembershipCategory = null,
        public readonly ?string $membershipCategory = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?string $sent = null,
        public readonly ?string $finished = null,
        public readonly ?string $changed = null,
        public readonly ?string $updateRequestStateClass = null,
        public readonly ?string $updateRequestState = null,
        public readonly ?string $idPersonChangeState = null,
        public readonly ?int $idPersonChange = null,
        public readonly ?int $idPersonChangeRequest = null,
        public readonly ?bool $hasValidParent = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            birthday: isset($obj->{'Birthday'}) ? (string) $obj->{'Birthday'} : null,
            idMembershipType: isset($obj->{'ID_MembershipType'}) ? (string) $obj->{'ID_MembershipType'} : null,
            membershipType: isset($obj->{'MembershipType'}) ? (string) $obj->{'MembershipType'} : null,
            idMembershipCategory: isset($obj->{'ID_MembershipCategory'}) ? (string) $obj->{'ID_MembershipCategory'} : null,
            membershipCategory: isset($obj->{'MembershipCategory'}) ? (string) $obj->{'MembershipCategory'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            sent: isset($obj->{'Sent'}) ? (string) $obj->{'Sent'} : null,
            finished: isset($obj->{'Finished'}) ? (string) $obj->{'Finished'} : null,
            changed: isset($obj->{'Changed'}) ? (string) $obj->{'Changed'} : null,
            updateRequestStateClass: isset($obj->{'UpdateRequestStateClass'}) ? (string) $obj->{'UpdateRequestStateClass'} : null,
            updateRequestState: isset($obj->{'UpdateRequestState'}) ? (string) $obj->{'UpdateRequestState'} : null,
            idPersonChangeState: isset($obj->{'ID_PersonChangeState'}) ? (string) $obj->{'ID_PersonChangeState'} : null,
            idPersonChange: isset($obj->{'ID_PersonChange'}) ? (int) $obj->{'ID_PersonChange'} : null,
            idPersonChangeRequest: isset($obj->{'ID_PersonChangeRequest'}) ? (int) $obj->{'ID_PersonChangeRequest'} : null,
            hasValidParent: isset($obj->{'HasValidParent'}) ? (bool) $obj->{'HasValidParent'} : null,
        );
    }
}
