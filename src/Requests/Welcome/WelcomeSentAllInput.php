<?php

namespace Misakstvanu\LaravelSkautis\Requests\Welcome;

final class WelcomeSentAllInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?int $idWelcome = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'ID_Welcome' => $this->idWelcome,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
