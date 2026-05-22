<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class DelegateAllPreferenceOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?bool $hasPreference = null,
        public readonly ?float $fee = null,
        public readonly ?int $idCandidate = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            hasPreference: isset($obj->{'HasPreference'}) ? (bool) $obj->{'HasPreference'} : null,
            fee: isset($obj->{'Fee'}) ? (float) $obj->{'Fee'} : null,
            idCandidate: isset($obj->{'ID_Candidate'}) ? (int) $obj->{'ID_Candidate'} : null,
        );
    }
}
