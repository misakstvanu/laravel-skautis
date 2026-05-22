<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class DomainAllPersonInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?bool $canGoogleAccount = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'CanGoogleAccount' => $this->canGoogleAccount,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
