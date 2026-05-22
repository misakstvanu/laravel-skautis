<?php

namespace Misakstvanu\LaravelSkautis\Requests\Insurance;

final class RegistrationAllPostFailedInput
{
    public function __construct(
        public readonly ?bool $showRegistrationOnly = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ShowRegistrationOnly' => $this->showRegistrationOnly,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
