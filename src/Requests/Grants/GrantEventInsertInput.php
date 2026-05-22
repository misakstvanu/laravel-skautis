<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantEventInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?int $idGrant = null,
        public readonly ?string $displayName = null,
        public readonly ?string $description = null,
        public readonly ?string $place = null,
        public readonly ?int $count = null,
        public readonly ?int $days = null,
        public readonly ?int $childrenCount = null,
        public readonly ?int $youngCount = null,
        public readonly ?int $otherCount = null,
        public readonly ?int $personDays = null,
        public readonly ?bool $isEstimation = null,
        public readonly ?bool $isCustomDays = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_User' => $this->idUser,
            'ID_Grant' => $this->idGrant,
            'DisplayName' => $this->displayName,
            'Description' => $this->description,
            'Place' => $this->place,
            'Count' => $this->count,
            'Days' => $this->days,
            'ChildrenCount' => $this->childrenCount,
            'YoungCount' => $this->youngCount,
            'OtherCount' => $this->otherCount,
            'PersonDays' => $this->personDays,
            'IsEstimation' => $this->isEstimation,
            'IsCustomDays' => $this->isCustomDays,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
