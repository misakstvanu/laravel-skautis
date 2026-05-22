<?php

namespace Misakstvanu\LaravelSkautis\Responses\Message;

final class MessageTypeAllOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $procedure = null,
        public readonly ?string $note = null,
        public readonly ?int $idMessageGroup = null,
        public readonly ?string $messageGroup = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            procedure: isset($obj->{'Procedure'}) ? (string) $obj->{'Procedure'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            idMessageGroup: isset($obj->{'ID_MessageGroup'}) ? (int) $obj->{'ID_MessageGroup'} : null,
            messageGroup: isset($obj->{'MessageGroup'}) ? (string) $obj->{'MessageGroup'} : null,
        );
    }
}
