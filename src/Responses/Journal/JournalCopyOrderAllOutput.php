<?php

namespace Misakstvanu\LaravelSkautis\Responses\Journal;

final class JournalCopyOrderAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $dateSent = null,
        public readonly ?int $idJournal = null,
        public readonly ?string $journal = null,
        public readonly ?int $idDocument = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            dateSent: isset($obj->{'DateSent'}) ? (string) $obj->{'DateSent'} : null,
            idJournal: isset($obj->{'ID_Journal'}) ? (int) $obj->{'ID_Journal'} : null,
            journal: isset($obj->{'Journal'}) ? (string) $obj->{'Journal'} : null,
            idDocument: isset($obj->{'ID_Document'}) ? (int) $obj->{'ID_Document'} : null,
        );
    }
}
