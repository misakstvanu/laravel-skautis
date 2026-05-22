<?php

namespace Misakstvanu\LaravelSkautis\Responses\Journal;

final class JournalReturnedReasonAllOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $note = null,
        public readonly ?bool $isPackage = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            isPackage: isset($obj->{'IsPackage'}) ? (bool) $obj->{'IsPackage'} : null,
        );
    }
}
