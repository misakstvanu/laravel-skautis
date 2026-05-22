<?php

namespace Misakstvanu\LaravelSkautis\Requests\Welcome;

final class StripeAllInput
{
    public function __construct(
        public readonly ?int $idWelcome = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idSex = null,
        public readonly ?int $idAlignmentType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Welcome' => $this->idWelcome,
            'DisplayName' => $this->displayName,
            'ID_Sex' => $this->idSex,
            'ID_AlignmentType' => $this->idAlignmentType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
