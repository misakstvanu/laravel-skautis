<?php

namespace Misakstvanu\LaravelSkautis\Responses\Welcome;

final class StripeAttachmentInsertOutput
{
    public function __construct(
        public readonly ?int $id = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
        );
    }
}
