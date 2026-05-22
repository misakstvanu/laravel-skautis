<?php

namespace Misakstvanu\LaravelSkautis\Responses\Power;

final class EnrollEnergyAllExportOutput
{
    public function __construct(
        public readonly ?string $content = null,
        public readonly ?string $fileName = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            content: isset($obj->{'Content'}) ? (string) $obj->{'Content'} : null,
            fileName: isset($obj->{'FileName'}) ? (string) $obj->{'FileName'} : null,
        );
    }
}
