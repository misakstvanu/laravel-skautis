<?php

namespace Misakstvanu\LaravelSkautis\Responses\Journal;

final class InvoiceAllXmlOutput
{
    public function __construct(
        public readonly ?string $xml = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            xml: isset($obj->{'Xml'}) ? (string) $obj->{'Xml'} : null,
        );
    }
}
