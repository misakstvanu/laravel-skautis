<?php

namespace Misakstvanu\LaravelSkautis\Responses\Message;

final class MessageToAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idMessage = null,
        public readonly ?string $message = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $email = null,
        public readonly ?string $person = null,
        public readonly ?bool $isRead = null,
        public readonly ?string $contact = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idMessage: isset($obj->{'ID_Message'}) ? (int) $obj->{'ID_Message'} : null,
            message: isset($obj->{'Message'}) ? (string) $obj->{'Message'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            isRead: isset($obj->{'IsRead'}) ? (bool) $obj->{'IsRead'} : null,
            contact: isset($obj->{'Contact'}) ? (string) $obj->{'Contact'} : null,
        );
    }
}
