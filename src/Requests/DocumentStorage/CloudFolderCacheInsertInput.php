<?php

namespace Misakstvanu\LaravelSkautis\Requests\DocumentStorage;

final class CloudFolderCacheInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $date = null,
        public readonly ?string $path = null,
        public readonly ?string $cloudGuid = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'Date' => $this->date,
            'Path' => $this->path,
            'CloudGuid' => $this->cloudGuid,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
