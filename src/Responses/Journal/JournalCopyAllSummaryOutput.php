<?php

namespace Misakstvanu\LaravelSkautis\Responses\Journal;

final class JournalCopyAllSummaryOutput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?int $idJournal = null,
        public readonly ?string $journal = null,
        public readonly ?string $dateSent = null,
        public readonly ?float $price = null,
        public readonly ?int $count = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idJournal: isset($obj->{'ID_Journal'}) ? (int) $obj->{'ID_Journal'} : null,
            journal: isset($obj->{'Journal'}) ? (string) $obj->{'Journal'} : null,
            dateSent: isset($obj->{'DateSent'}) ? (string) $obj->{'DateSent'} : null,
            price: isset($obj->{'Price'}) ? (float) $obj->{'Price'} : null,
            count: isset($obj->{'Count'}) ? (int) $obj->{'Count'} : null,
        );
    }
}
