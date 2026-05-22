<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class FoodMenuAllInput
{
    public function __construct(
        public readonly ?int $idFood = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idPersonFree = null,
        public readonly ?bool $addNoFood = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Food' => $this->idFood,
            'DisplayName' => $this->displayName,
            'ID_PersonFree' => $this->idPersonFree,
            'AddNoFood' => $this->addNoFood,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
