<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class JournalReturnedReasonAllInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?bool $isPackage = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'IsPackage' => $this->isPackage,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
