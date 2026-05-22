<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class GoogleAccountDetailMainInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?bool $loadMainEmail = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'LoadMainEmail' => $this->loadMainEmail,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
