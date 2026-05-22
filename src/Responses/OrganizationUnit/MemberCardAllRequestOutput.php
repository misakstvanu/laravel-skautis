<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class MemberCardAllRequestOutput
{
    public function __construct(
        public readonly ?string $fileName = null,
        public readonly ?string $content = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            fileName: isset($obj->{'FileName'}) ? (string) $obj->{'FileName'} : null,
            content: isset($obj->{'Content'}) ? (string) $obj->{'Content'} : null,
        );
    }
}
