<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class GoogleAccountAllInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?int $id = null,
        public readonly ?bool $isMain = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'ID' => $this->id,
            'IsMain' => $this->isMain,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
