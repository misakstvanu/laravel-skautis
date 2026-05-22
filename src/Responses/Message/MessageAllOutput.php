<?php

namespace Misakstvanu\LaravelSkautis\Responses\Message;

final class MessageAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $body = null,
        public readonly ?bool $isHtml = null,
        public readonly ?string $senderEmail = null,
        public readonly ?string $senderName = null,
        public readonly ?string $replyTo = null,
        public readonly ?string $idMessageType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            body: isset($obj->{'Body'}) ? (string) $obj->{'Body'} : null,
            isHtml: isset($obj->{'IsHtml'}) ? (bool) $obj->{'IsHtml'} : null,
            senderEmail: isset($obj->{'SenderEmail'}) ? (string) $obj->{'SenderEmail'} : null,
            senderName: isset($obj->{'SenderName'}) ? (string) $obj->{'SenderName'} : null,
            replyTo: isset($obj->{'ReplyTo'}) ? (string) $obj->{'ReplyTo'} : null,
            idMessageType: isset($obj->{'ID_MessageType'}) ? (string) $obj->{'ID_MessageType'} : null,
        );
    }
}
