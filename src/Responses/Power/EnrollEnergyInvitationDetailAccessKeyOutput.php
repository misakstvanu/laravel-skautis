<?php

namespace Misakstvanu\LaravelSkautis\Responses\Power;

final class EnrollEnergyInvitationDetailAccessKeyOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?string $validTo = null,
        public readonly ?string $accessKey = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $email = null,
        public readonly ?string $personalText = null,
        public readonly ?string $lastOpened = null,
        public readonly ?bool $isValid = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            accessKey: isset($obj->{'AccessKey'}) ? (string) $obj->{'AccessKey'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            personalText: isset($obj->{'PersonalText'}) ? (string) $obj->{'PersonalText'} : null,
            lastOpened: isset($obj->{'LastOpened'}) ? (string) $obj->{'LastOpened'} : null,
            isValid: isset($obj->{'IsValid'}) ? (bool) $obj->{'IsValid'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
        );
    }
}
