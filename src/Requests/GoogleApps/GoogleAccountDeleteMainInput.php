<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class GoogleAccountDeleteMainInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?int $idGoogleAccount = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'ID_GoogleAccount' => $this->idGoogleAccount,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
