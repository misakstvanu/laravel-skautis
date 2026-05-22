<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class MemberCardInvoiceAllXmlOutput
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
