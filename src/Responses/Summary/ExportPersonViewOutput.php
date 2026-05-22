<?php

namespace Misakstvanu\LaravelSkautis\Responses\Summary;

final class ExportPersonViewOutput
{
    public function __construct(
        public readonly ?string $data = null,
        public readonly ?string $name = null,
        public readonly ?string $displayName = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            data: isset($obj->{'Data'}) ? (string) $obj->{'Data'} : null,
            name: isset($obj->{'Name'}) ? (string) $obj->{'Name'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
        );
    }
}
