<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class ParticipantCampAllEventCampExportWordOutput
{
    public function __construct(
        public readonly ?string $exportDocumentContent = null,
        public readonly ?string $exportDocumentName = null,
        public readonly ?string $exportDocumentExtension = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            exportDocumentContent: isset($obj->{'ExportDocumentContent'}) ? (string) $obj->{'ExportDocumentContent'} : null,
            exportDocumentName: isset($obj->{'ExportDocumentName'}) ? (string) $obj->{'ExportDocumentName'} : null,
            exportDocumentExtension: isset($obj->{'ExportDocumentExtension'}) ? (string) $obj->{'ExportDocumentExtension'} : null,
        );
    }
}
