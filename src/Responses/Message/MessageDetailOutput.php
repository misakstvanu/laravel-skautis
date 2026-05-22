<?php

namespace Misakstvanu\LaravelSkautis\Responses\Message;

final class MessageDetailOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idMessageType = null,
        public readonly ?string $messageType = null,
        public readonly ?string $idMessageMedium = null,
        public readonly ?string $messageMedium = null,
        public readonly ?string $idMessageState = null,
        public readonly ?string $messageState = null,
        public readonly ?string $dateCreate = null,
        public readonly ?string $displayName = null,
        public readonly ?string $body = null,
        public readonly ?string $messageGroup = null,
        public readonly ?bool $isHtml = null,
        public readonly ?int $idMessagePrev = null,
        public readonly ?int $idMessageNext = null,
        public readonly ?bool $isActive = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idMessageType: isset($obj->{'ID_MessageType'}) ? (string) $obj->{'ID_MessageType'} : null,
            messageType: isset($obj->{'MessageType'}) ? (string) $obj->{'MessageType'} : null,
            idMessageMedium: isset($obj->{'ID_MessageMedium'}) ? (string) $obj->{'ID_MessageMedium'} : null,
            messageMedium: isset($obj->{'MessageMedium'}) ? (string) $obj->{'MessageMedium'} : null,
            idMessageState: isset($obj->{'ID_MessageState'}) ? (string) $obj->{'ID_MessageState'} : null,
            messageState: isset($obj->{'MessageState'}) ? (string) $obj->{'MessageState'} : null,
            dateCreate: isset($obj->{'DateCreate'}) ? (string) $obj->{'DateCreate'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            body: isset($obj->{'Body'}) ? (string) $obj->{'Body'} : null,
            messageGroup: isset($obj->{'MessageGroup'}) ? (string) $obj->{'MessageGroup'} : null,
            isHtml: isset($obj->{'IsHtml'}) ? (bool) $obj->{'IsHtml'} : null,
            idMessagePrev: isset($obj->{'ID_MessagePrev'}) ? (int) $obj->{'ID_MessagePrev'} : null,
            idMessageNext: isset($obj->{'ID_MessageNext'}) ? (int) $obj->{'ID_MessageNext'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
        );
    }
}
