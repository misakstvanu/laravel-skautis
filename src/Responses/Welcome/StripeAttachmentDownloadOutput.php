<?php

namespace Misakstvanu\LaravelSkautis\Responses\Welcome;

final class StripeAttachmentDownloadOutput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?string $extension = null,
        public readonly ?string $content = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            extension: isset($obj->{'Extension'}) ? (string) $obj->{'Extension'} : null,
            content: isset($obj->{'Content'}) ? (string) $obj->{'Content'} : null,
        );
    }
}
