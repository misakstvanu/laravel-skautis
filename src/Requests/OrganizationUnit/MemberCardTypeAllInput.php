<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class MemberCardTypeAllInput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idPerson = null,
        public readonly ?bool $filterByAge = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_Person' => $this->idPerson,
            'FilterByAge' => $this->filterByAge,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
