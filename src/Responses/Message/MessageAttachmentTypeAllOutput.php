<?php

namespace Misakstvanu\LaravelSkautis\Responses\Message;

final class MessageAttachmentTypeAllOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $idMessageType = null,
        public readonly ?string $messageType = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isMultiple = null,
        public readonly ?int $maxCount = null,
        public readonly ?string $note = null,
        public readonly ?int $height = null,
        public readonly ?int $width = null,
        public readonly ?string $replaceName = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            idMessageType: isset($obj->{'ID_MessageType'}) ? (string) $obj->{'ID_MessageType'} : null,
            messageType: isset($obj->{'MessageType'}) ? (string) $obj->{'MessageType'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            isMultiple: isset($obj->{'IsMultiple'}) ? (bool) $obj->{'IsMultiple'} : null,
            maxCount: isset($obj->{'MaxCount'}) ? (int) $obj->{'MaxCount'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            height: isset($obj->{'Height'}) ? (int) $obj->{'Height'} : null,
            width: isset($obj->{'Width'}) ? (int) $obj->{'Width'} : null,
            replaceName: isset($obj->{'ReplaceName'}) ? (string) $obj->{'ReplaceName'} : null,
        );
    }
}
