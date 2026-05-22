<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class HonourAllGrantOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $fileName = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            fileName: isset($obj->{'FileName'}) ? (string) $obj->{'FileName'} : null,
        );
    }
}
