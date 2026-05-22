<?php

namespace Misakstvanu\LaravelSkautis\Responses\Message;

final class MessageGroupAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $replyTo = null,
        public readonly ?string $footer = null,
        public readonly ?string $footerHtml = null,
        public readonly ?string $note = null,
        public readonly ?int $messageTypeCount = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            replyTo: isset($obj->{'ReplyTo'}) ? (string) $obj->{'ReplyTo'} : null,
            footer: isset($obj->{'Footer'}) ? (string) $obj->{'Footer'} : null,
            footerHtml: isset($obj->{'FooterHtml'}) ? (string) $obj->{'FooterHtml'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            messageTypeCount: isset($obj->{'MessageTypeCount'}) ? (int) $obj->{'MessageTypeCount'} : null,
        );
    }
}
