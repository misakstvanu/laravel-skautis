<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class FoodMenuAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idFood = null,
        public readonly ?string $food = null,
        public readonly ?string $displayName = null,
        public readonly ?int $capacity = null,
        public readonly ?int $occupy = null,
        public readonly ?int $capacityLeft = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idFood: isset($obj->{'ID_Food'}) ? (int) $obj->{'ID_Food'} : null,
            food: isset($obj->{'Food'}) ? (string) $obj->{'Food'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            capacity: isset($obj->{'Capacity'}) ? (int) $obj->{'Capacity'} : null,
            occupy: isset($obj->{'Occupy'}) ? (int) $obj->{'Occupy'} : null,
            capacityLeft: isset($obj->{'CapacityLeft'}) ? (int) $obj->{'CapacityLeft'} : null,
        );
    }
}
