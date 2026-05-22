<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class MembershipApplicationAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $idMembershipApplicationState = null,
        public readonly ?string $membershipApplicationState = null,
        public readonly ?string $validTo = null,
        public readonly ?string $accessKey = null,
        public readonly ?bool $isValid = null,
        public readonly ?string $dateCreate = null,
        public readonly ?string $lastOpened = null,
        public readonly ?string $firstName = null,
        public readonly ?string $lastName = null,
        public readonly ?string $firstNameParent = null,
        public readonly ?string $lastNameParent = null,
        public readonly ?string $email = null,
        public readonly ?bool $isAdult = null,
        public readonly ?string $dateFilled = null,
        public readonly ?string $dateFinished = null,
        public readonly ?string $person = null,
        public readonly ?string $birthday = null,
        public readonly ?string $identificationCode = null,
        public readonly ?string $dateState = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            idMembershipApplicationState: isset($obj->{'ID_MembershipApplicationState'}) ? (string) $obj->{'ID_MembershipApplicationState'} : null,
            membershipApplicationState: isset($obj->{'MembershipApplicationState'}) ? (string) $obj->{'MembershipApplicationState'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            accessKey: isset($obj->{'AccessKey'}) ? (string) $obj->{'AccessKey'} : null,
            isValid: isset($obj->{'IsValid'}) ? (bool) $obj->{'IsValid'} : null,
            dateCreate: isset($obj->{'DateCreate'}) ? (string) $obj->{'DateCreate'} : null,
            lastOpened: isset($obj->{'LastOpened'}) ? (string) $obj->{'LastOpened'} : null,
            firstName: isset($obj->{'FirstName'}) ? (string) $obj->{'FirstName'} : null,
            lastName: isset($obj->{'LastName'}) ? (string) $obj->{'LastName'} : null,
            firstNameParent: isset($obj->{'FirstNameParent'}) ? (string) $obj->{'FirstNameParent'} : null,
            lastNameParent: isset($obj->{'LastNameParent'}) ? (string) $obj->{'LastNameParent'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            isAdult: isset($obj->{'IsAdult'}) ? (bool) $obj->{'IsAdult'} : null,
            dateFilled: isset($obj->{'DateFilled'}) ? (string) $obj->{'DateFilled'} : null,
            dateFinished: isset($obj->{'DateFinished'}) ? (string) $obj->{'DateFinished'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            birthday: isset($obj->{'Birthday'}) ? (string) $obj->{'Birthday'} : null,
            identificationCode: isset($obj->{'IdentificationCode'}) ? (string) $obj->{'IdentificationCode'} : null,
            dateState: isset($obj->{'DateState'}) ? (string) $obj->{'DateState'} : null,
        );
    }
}
