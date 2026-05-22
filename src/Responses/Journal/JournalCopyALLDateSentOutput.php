<?php

namespace Misakstvanu\LaravelSkautis\Responses\Journal;

final class JournalCopyALLDateSentOutput
{
    public function __construct(
        public readonly ?string $dateSent = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            dateSent: isset($obj->{'DateSent'}) ? (string) $obj->{'DateSent'} : null,
        );
    }
}
