<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class OfferAllInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?int $idOfferType = null,
        public readonly ?bool $showHistory = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'ID_OfferType' => $this->idOfferType,
            'ShowHistory' => $this->showHistory,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
