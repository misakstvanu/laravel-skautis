<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class PersonFoodUpdateInput
{
    public function __construct(
        public readonly ?int $idEventCongress = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $idFood = null,
        public readonly ?int $idFoodMenu = null,
        public readonly ?string $note = null,
        public readonly ?bool $noFood = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCongress' => $this->idEventCongress,
            'ID_Person' => $this->idPerson,
            'ID_Food' => $this->idFood,
            'ID_FoodMenu' => $this->idFoodMenu,
            'Note' => $this->note,
            'NoFood' => $this->noFood,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
