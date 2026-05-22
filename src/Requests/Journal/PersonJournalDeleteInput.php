<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class PersonJournalDeleteInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $deleteAttachment = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DeleteAttachment' => $this->deleteAttachment,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
