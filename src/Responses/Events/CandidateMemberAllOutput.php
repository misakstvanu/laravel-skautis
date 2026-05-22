<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class CandidateMemberAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idCandidate = null,
        public readonly ?string $displayName = null,
        public readonly ?int $yearFrom = null,
        public readonly ?int $yearTo = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idCandidate: isset($obj->{'ID_Candidate'}) ? (int) $obj->{'ID_Candidate'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            yearFrom: isset($obj->{'YearFrom'}) ? (int) $obj->{'YearFrom'} : null,
            yearTo: isset($obj->{'YearTo'}) ? (int) $obj->{'YearTo'} : null,
        );
    }
}
