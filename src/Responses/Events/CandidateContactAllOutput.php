<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class CandidateContactAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idCandidate = null,
        public readonly ?int $idPersonContact = null,
        public readonly ?string $idContactType = null,
        public readonly ?string $contactType = null,
        public readonly ?string $value = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idCandidate: isset($obj->{'ID_Candidate'}) ? (int) $obj->{'ID_Candidate'} : null,
            idPersonContact: isset($obj->{'ID_PersonContact'}) ? (int) $obj->{'ID_PersonContact'} : null,
            idContactType: isset($obj->{'ID_ContactType'}) ? (string) $obj->{'ID_ContactType'} : null,
            contactType: isset($obj->{'ContactType'}) ? (string) $obj->{'ContactType'} : null,
            value: isset($obj->{'Value'}) ? (string) $obj->{'Value'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
