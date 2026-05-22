<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationLetterRequestAllAttachmentExportInput
{
    public function __construct(
        public readonly ?string $idItems = null,
        public readonly ?bool $isParticipantEducation = null,
        public readonly ?bool $exportAttachments = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Items' => $this->idItems,
            'IsParticipantEducation' => $this->isParticipantEducation,
            'ExportAttachments' => $this->exportAttachments,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
