<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class MemberCardAllUnitInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idMemberCardType = null,
        public readonly ?bool $includeChild = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_MemberCardType' => $this->idMemberCardType,
            'IncludeChild' => $this->includeChild,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
