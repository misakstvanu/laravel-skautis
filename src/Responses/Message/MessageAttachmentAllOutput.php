<?php

namespace Misakstvanu\LaravelSkautis\Responses\Message;

final class MessageAttachmentAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idMessage = null,
        public readonly ?string $displayName = null,
        public readonly ?string $fileName = null,
        public readonly ?int $idDocument = null,
        public readonly ?bool $isHtmlImage = null,
        public readonly ?string $idMessageAttachmentType = null,
        public readonly ?bool $isMultiple = null,
        public readonly ?string $replaceName = null,
        public readonly ?int $height = null,
        public readonly ?int $width = null,
        public readonly ?int $maxCount = null,
        public readonly ?int $order = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idMessage: isset($obj->{'ID_Message'}) ? (int) $obj->{'ID_Message'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            fileName: isset($obj->{'FileName'}) ? (string) $obj->{'FileName'} : null,
            idDocument: isset($obj->{'ID_Document'}) ? (int) $obj->{'ID_Document'} : null,
            isHtmlImage: isset($obj->{'IsHtmlImage'}) ? (bool) $obj->{'IsHtmlImage'} : null,
            idMessageAttachmentType: isset($obj->{'ID_MessageAttachmentType'}) ? (string) $obj->{'ID_MessageAttachmentType'} : null,
            isMultiple: isset($obj->{'IsMultiple'}) ? (bool) $obj->{'IsMultiple'} : null,
            replaceName: isset($obj->{'ReplaceName'}) ? (string) $obj->{'ReplaceName'} : null,
            height: isset($obj->{'Height'}) ? (int) $obj->{'Height'} : null,
            width: isset($obj->{'Width'}) ? (int) $obj->{'Width'} : null,
            maxCount: isset($obj->{'MaxCount'}) ? (int) $obj->{'MaxCount'} : null,
            order: isset($obj->{'Order'}) ? (int) $obj->{'Order'} : null,
        );
    }
}
