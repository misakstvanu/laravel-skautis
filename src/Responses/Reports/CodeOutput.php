<?php

namespace Misakstvanu\LaravelSkautis\Responses\Reports;

final class CodeOutput
{
    public function __construct(
        public readonly ?string $content = null,
        public readonly ?string $fileName = null,
        public readonly ?string $extension = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            content: isset($obj->{'Content'}) ? (string) $obj->{'Content'} : null,
            fileName: isset($obj->{'FileName'}) ? (string) $obj->{'FileName'} : null,
            extension: isset($obj->{'Extension'}) ? (string) $obj->{'Extension'} : null,
        );
    }
}
