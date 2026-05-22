<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class PersonFoodAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idFood = null,
        public readonly ?string $day = null,
        public readonly ?string $food = null,
        public readonly ?int $idFoodMenu = null,
        public readonly ?string $foodMenu = null,
        public readonly ?string $note = null,
        public readonly ?bool $noFood = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idFood: isset($obj->{'ID_Food'}) ? (int) $obj->{'ID_Food'} : null,
            day: isset($obj->{'Day'}) ? (string) $obj->{'Day'} : null,
            food: isset($obj->{'Food'}) ? (string) $obj->{'Food'} : null,
            idFoodMenu: isset($obj->{'ID_FoodMenu'}) ? (int) $obj->{'ID_FoodMenu'} : null,
            foodMenu: isset($obj->{'FoodMenu'}) ? (string) $obj->{'FoodMenu'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            noFood: isset($obj->{'NoFood'}) ? (bool) $obj->{'NoFood'} : null,
        );
    }
}
