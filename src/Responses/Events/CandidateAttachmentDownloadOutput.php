<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class CandidateAttachmentDownloadOutput
{
    public function __construct(
        public readonly ?string $attachmentExtension = null,
        public readonly ?string $attachmentContent = null,
        public readonly ?int $idDocument = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            attachmentExtension: isset($obj->{'AttachmentExtension'}) ? (string) $obj->{'AttachmentExtension'} : null,
            attachmentContent: isset($obj->{'AttachmentContent'}) ? (string) $obj->{'AttachmentContent'} : null,
            idDocument: isset($obj->{'ID_Document'}) ? (int) $obj->{'ID_Document'} : null,
        );
    }
}
