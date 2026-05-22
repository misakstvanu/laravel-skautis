<?php

namespace Misakstvanu\LaravelSkautis\Requests\Welcome;

final class WelcomeSentInsertInput
{
    public function __construct(
        public readonly ?int $idFunction = null,
        public readonly ?int $idWelcome = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Function' => $this->idFunction,
            'ID_Welcome' => $this->idWelcome,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
