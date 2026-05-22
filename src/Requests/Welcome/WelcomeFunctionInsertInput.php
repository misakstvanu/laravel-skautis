<?php

namespace Misakstvanu\LaravelSkautis\Requests\Welcome;

final class WelcomeFunctionInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idWelcome = null,
        public readonly ?string $welcome = null,
        public readonly ?int $idFunctionType = null,
        public readonly ?string $functionType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Welcome' => $this->idWelcome,
            'Welcome' => $this->welcome,
            'ID_FunctionType' => $this->idFunctionType,
            'FunctionType' => $this->functionType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
