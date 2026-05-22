<?php

namespace Misakstvanu\LaravelSkautis\Responses\Journal;

final class PersonJournalDetailExistsOutput
{
    public function __construct(
        public readonly ?bool $exists = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            exists: isset($obj->{'Exists'}) ? (bool) $obj->{'Exists'} : null,
        );
    }
}
