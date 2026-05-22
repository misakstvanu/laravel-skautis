<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonQualificationLetterDownloadOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $content = null,
        public readonly ?string $fileName = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            content: isset($obj->{'Content'}) ? (string) $obj->{'Content'} : null,
            fileName: isset($obj->{'FileName'}) ? (string) $obj->{'FileName'} : null,
        );
    }
}
