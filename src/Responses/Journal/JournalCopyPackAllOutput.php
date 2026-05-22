<?php

namespace Misakstvanu\LaravelSkautis\Responses\Journal;

final class JournalCopyPackAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $isRoot = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            isRoot: isset($obj->{'IsRoot'}) ? (bool) $obj->{'IsRoot'} : null,
        );
    }
}
