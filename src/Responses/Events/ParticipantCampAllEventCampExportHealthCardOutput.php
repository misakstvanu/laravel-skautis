<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class ParticipantCampAllEventCampExportHealthCardOutput
{
    public function __construct(
        public readonly ?string $healthCardDocumentContent = null,
        public readonly ?string $healthCardDocumentName = null,
        public readonly ?string $healthCardDocumentExtension = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            healthCardDocumentContent: isset($obj->{'HealthCardDocumentContent'}) ? (string) $obj->{'HealthCardDocumentContent'} : null,
            healthCardDocumentName: isset($obj->{'HealthCardDocumentName'}) ? (string) $obj->{'HealthCardDocumentName'} : null,
            healthCardDocumentExtension: isset($obj->{'HealthCardDocumentExtension'}) ? (string) $obj->{'HealthCardDocumentExtension'} : null,
        );
    }
}
