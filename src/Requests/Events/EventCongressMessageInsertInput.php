<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCongressMessageInsertInput
{
    public function __construct(
        public readonly ?string $string = null,
        public readonly ?int $idEventCongress = null,
        public readonly ?string $subject = null,
        public readonly ?string $body = null,
        public readonly ?string $fileName = null,
        public readonly ?string $content = null,
        public readonly ?int $idDocumentAttachment = null,
        public readonly ?string $idTempFileAttachment = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'string' => $this->string,
            'ID_EventCongress' => $this->idEventCongress,
            'Subject' => $this->subject,
            'Body' => $this->body,
            'FileName' => $this->fileName,
            'Content' => $this->content,
            'ID_DocumentAttachment' => $this->idDocumentAttachment,
            'ID_TempFileAttachment' => $this->idTempFileAttachment,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
