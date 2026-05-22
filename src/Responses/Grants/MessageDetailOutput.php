<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class MessageDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?string $text = null,
        public readonly ?string $created = null,
        public readonly ?string $sent = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $grantCount = null,
        public readonly ?int $int = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            text: isset($obj->{'Text'}) ? (string) $obj->{'Text'} : null,
            created: isset($obj->{'Created'}) ? (string) $obj->{'Created'} : null,
            sent: isset($obj->{'Sent'}) ? (string) $obj->{'Sent'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            grantCount: isset($obj->{'GrantCount'}) ? (int) $obj->{'GrantCount'} : null,
            int: isset($obj->{'int'}) ? (int) $obj->{'int'} : null,
        );
    }
}
