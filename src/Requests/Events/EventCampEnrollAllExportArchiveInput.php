<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCampEnrollAllExportArchiveInput
{
    public function __construct(
        public readonly ?bool $includeEnroll = null,
        public readonly ?bool $includeGroup = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'IncludeEnroll' => $this->includeEnroll,
            'IncludeGroup' => $this->includeGroup,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
