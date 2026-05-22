<?php

namespace Misakstvanu\LaravelSkautis\Responses\Journal;

final class JournalCopyOrderItemDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idJournalCopyOrder = null,
        public readonly ?string $content = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idJournalCopyOrder: isset($obj->{'ID_JournalCopyOrder'}) ? (int) $obj->{'ID_JournalCopyOrder'} : null,
            content: isset($obj->{'Content'}) ? (string) $obj->{'Content'} : null,
        );
    }
}
