<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonChangeRequestDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $created = null,
        public readonly ?string $sent = null,
        public readonly ?string $text = null,
        public readonly ?int $idPerson = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            created: isset($obj->{'Created'}) ? (string) $obj->{'Created'} : null,
            sent: isset($obj->{'Sent'}) ? (string) $obj->{'Sent'} : null,
            text: isset($obj->{'Text'}) ? (string) $obj->{'Text'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
        );
    }
}
