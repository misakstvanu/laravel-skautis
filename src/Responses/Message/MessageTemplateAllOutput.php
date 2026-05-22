<?php

namespace Misakstvanu\LaravelSkautis\Responses\Message;

final class MessageTemplateAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idMessageType = null,
        public readonly ?string $messageType = null,
        public readonly ?string $idMessageMedium = null,
        public readonly ?string $messageMedium = null,
        public readonly ?string $displayName = null,
        public readonly ?string $body = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idMessageType: isset($obj->{'ID_MessageType'}) ? (string) $obj->{'ID_MessageType'} : null,
            messageType: isset($obj->{'MessageType'}) ? (string) $obj->{'MessageType'} : null,
            idMessageMedium: isset($obj->{'ID_MessageMedium'}) ? (string) $obj->{'ID_MessageMedium'} : null,
            messageMedium: isset($obj->{'MessageMedium'}) ? (string) $obj->{'MessageMedium'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            body: isset($obj->{'Body'}) ? (string) $obj->{'Body'} : null,
        );
    }
}
