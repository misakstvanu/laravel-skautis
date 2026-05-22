<?php

namespace Misakstvanu\LaravelSkautis\Responses\Message;

final class MessageAllWebOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idMessageType = null,
        public readonly ?string $messageType = null,
        public readonly ?string $dateCreate = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isRead = null,
        public readonly ?bool $hasAttachments = null,
        public readonly ?string $messageGroup = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idMessageType: isset($obj->{'ID_MessageType'}) ? (string) $obj->{'ID_MessageType'} : null,
            messageType: isset($obj->{'MessageType'}) ? (string) $obj->{'MessageType'} : null,
            dateCreate: isset($obj->{'DateCreate'}) ? (string) $obj->{'DateCreate'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            isRead: isset($obj->{'IsRead'}) ? (bool) $obj->{'IsRead'} : null,
            hasAttachments: isset($obj->{'HasAttachments'}) ? (bool) $obj->{'HasAttachments'} : null,
            messageGroup: isset($obj->{'MessageGroup'}) ? (string) $obj->{'MessageGroup'} : null,
        );
    }
}
