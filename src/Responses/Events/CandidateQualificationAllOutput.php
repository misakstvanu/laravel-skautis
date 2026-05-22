<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class CandidateQualificationAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idCandidate = null,
        public readonly ?int $idQualification = null,
        public readonly ?int $idQualificationType = null,
        public readonly ?string $qualificationType = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idCandidate: isset($obj->{'ID_Candidate'}) ? (int) $obj->{'ID_Candidate'} : null,
            idQualification: isset($obj->{'ID_Qualification'}) ? (int) $obj->{'ID_Qualification'} : null,
            idQualificationType: isset($obj->{'ID_QualificationType'}) ? (int) $obj->{'ID_QualificationType'} : null,
            qualificationType: isset($obj->{'QualificationType'}) ? (string) $obj->{'QualificationType'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
