<?php

namespace Misakstvanu\LaravelSkautis\Responses\DocumentStorage;

final class DocumentAllUnusedOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $storage = null,
        public readonly ?int $size = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            storage: isset($obj->{'Storage'}) ? (string) $obj->{'Storage'} : null,
            size: isset($obj->{'Size'}) ? (int) $obj->{'Size'} : null,
        );
    }
}
