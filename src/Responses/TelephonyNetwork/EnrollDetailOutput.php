<?php

namespace Misakstvanu\LaravelSkautis\Responses\TelephonyNetwork;

final class EnrollDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?bool $isValid = null,
        public readonly ?bool $agreement = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            isValid: isset($obj->{'IsValid'}) ? (bool) $obj->{'IsValid'} : null,
            agreement: isset($obj->{'Agreement'}) ? (bool) $obj->{'Agreement'} : null,
        );
    }
}
