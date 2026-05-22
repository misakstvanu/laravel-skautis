<?php

namespace Misakstvanu\LaravelSkautis\Requests\Welcome;

final class WelcomeFunctionAllInput
{
    public function __construct(
        public readonly ?int $idWelcome = null,
        public readonly ?int $id = null,
        public readonly ?int $idFunctionType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Welcome' => $this->idWelcome,
            'ID' => $this->id,
            'ID_FunctionType' => $this->idFunctionType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
