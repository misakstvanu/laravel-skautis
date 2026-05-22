<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class MemberCardInvoiceDetailDownloadPdfOutput
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
