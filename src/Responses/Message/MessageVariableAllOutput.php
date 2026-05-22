<?php

namespace Misakstvanu\LaravelSkautis\Responses\Message;

final class MessageVariableAllOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idMessageType = null,
        public readonly ?string $messageType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idMessageType: isset($obj->{'ID_MessageType'}) ? (string) $obj->{'ID_MessageType'} : null,
            messageType: isset($obj->{'MessageType'}) ? (string) $obj->{'MessageType'} : null,
        );
    }
}
