<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class CandidateEducationSeminaryAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idCandidate = null,
        public readonly ?int $idEducationSeminary = null,
        public readonly ?string $educationSeminary = null,
        public readonly ?int $yearFrom = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idCandidate: isset($obj->{'ID_Candidate'}) ? (int) $obj->{'ID_Candidate'} : null,
            idEducationSeminary: isset($obj->{'ID_EducationSeminary'}) ? (int) $obj->{'ID_EducationSeminary'} : null,
            educationSeminary: isset($obj->{'EducationSeminary'}) ? (string) $obj->{'EducationSeminary'} : null,
            yearFrom: isset($obj->{'YearFrom'}) ? (int) $obj->{'YearFrom'} : null,
        );
    }
}
