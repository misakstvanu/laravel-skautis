<?php

namespace Misakstvanu\LaravelSkautis\Responses\Journal;

final class JournalCopyOrderItemAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idJournalCopyOrder = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idJournalCopyOrder: isset($obj->{'ID_JournalCopyOrder'}) ? (int) $obj->{'ID_JournalCopyOrder'} : null,
        );
    }
}
