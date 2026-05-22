<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class CandidateRecommendationAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idCandidate = null,
        public readonly ?string $displayName = null,
        public readonly ?string $relation = null,
        public readonly ?string $description = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idCandidate: isset($obj->{'ID_Candidate'}) ? (int) $obj->{'ID_Candidate'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            relation: isset($obj->{'Relation'}) ? (string) $obj->{'Relation'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
        );
    }
}
