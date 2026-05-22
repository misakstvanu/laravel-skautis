<?php

namespace Misakstvanu\LaravelSkautis\Requests\Welcome;

final class WelcomeMessageInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $idFunctionType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            'ID_FunctionType' => $this->idFunctionType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
