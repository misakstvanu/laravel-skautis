<?php

namespace Misakstvanu\LaravelSkautis\Responses\Journal;

final class JournalDetailOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idJournalType = null,
        public readonly ?string $journalType = null,
        public readonly ?float $price = null,
        public readonly ?string $note = null,
        public readonly ?string $key = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idJournalType: isset($obj->{'ID_JournalType'}) ? (string) $obj->{'ID_JournalType'} : null,
            journalType: isset($obj->{'JournalType'}) ? (string) $obj->{'JournalType'} : null,
            price: isset($obj->{'Price'}) ? (float) $obj->{'Price'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            key: isset($obj->{'Key'}) ? (string) $obj->{'Key'} : null,
        );
    }
}
