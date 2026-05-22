<?php

namespace Misakstvanu\LaravelSkautis\Responses\Journal;

final class InvoiceAllZipOutput
{
    public function __construct(
        public readonly ?string $content = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            content: isset($obj->{'Content'}) ? (string) $obj->{'Content'} : null,
        );
    }
}
