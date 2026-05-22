<?php

namespace Misakstvanu\LaravelSkautis\Responses\Message;

final class MessageGroupPersonAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idMessageGroup = null,
        public readonly ?string $messageGroup = null,
        public readonly ?bool $subscribe = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idMessageGroup: isset($obj->{'ID_MessageGroup'}) ? (int) $obj->{'ID_MessageGroup'} : null,
            messageGroup: isset($obj->{'MessageGroup'}) ? (string) $obj->{'MessageGroup'} : null,
            subscribe: isset($obj->{'Subscribe'}) ? (bool) $obj->{'Subscribe'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
