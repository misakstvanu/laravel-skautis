<?php

namespace Misakstvanu\LaravelSkautis\Requests\Insurance;

final class PersonAllRegistrationInput
{
    public function __construct(
        public readonly ?int $idRegistration = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Registration' => $this->idRegistration,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
