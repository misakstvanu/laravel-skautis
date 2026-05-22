<?php

namespace Misakstvanu\LaravelSkautis\Responses\DocumentStorage;

final class CloudFolderCacheAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $date = null,
        public readonly ?string $path = null,
        public readonly ?string $cloudGuid = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            date: isset($obj->{'Date'}) ? (string) $obj->{'Date'} : null,
            path: isset($obj->{'Path'}) ? (string) $obj->{'Path'} : null,
            cloudGuid: isset($obj->{'CloudGuid'}) ? (string) $obj->{'CloudGuid'} : null,
        );
    }
}
