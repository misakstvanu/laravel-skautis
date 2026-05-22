<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class QualificationRequestDetailDownloadLetterOutput
{
    public function __construct(
        public readonly ?string $fileName = null,
        public readonly ?string $fileContent = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            fileName: isset($obj->{'FileName'}) ? (string) $obj->{'FileName'} : null,
            fileContent: isset($obj->{'FileContent'}) ? (string) $obj->{'FileContent'} : null,
        );
    }
}
