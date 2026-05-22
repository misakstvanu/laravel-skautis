<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class JournalCopySentDetailReturnedInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $isPackage = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'IsPackage' => $this->isPackage,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
