<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class GoogleGroupAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $email = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $dateCreate = null,
        public readonly ?bool $valid = null,
        public readonly ?int $aliasCount = null,
        public readonly ?bool $isAutoAddPerson = null,
        public readonly ?int $idGoogleGroupMain = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            dateCreate: isset($obj->{'DateCreate'}) ? (string) $obj->{'DateCreate'} : null,
            valid: isset($obj->{'Valid'}) ? (bool) $obj->{'Valid'} : null,
            aliasCount: isset($obj->{'AliasCount'}) ? (int) $obj->{'AliasCount'} : null,
            isAutoAddPerson: isset($obj->{'IsAutoAddPerson'}) ? (bool) $obj->{'IsAutoAddPerson'} : null,
            idGoogleGroupMain: isset($obj->{'ID_GoogleGroupMain'}) ? (int) $obj->{'ID_GoogleGroupMain'} : null,
        );
    }
}
