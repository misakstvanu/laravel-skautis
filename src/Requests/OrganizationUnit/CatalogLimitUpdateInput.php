<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class CatalogLimitUpdateInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?bool $onlyWeek = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'OnlyWeek' => $this->onlyWeek,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
