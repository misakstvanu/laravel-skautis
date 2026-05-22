<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class MembershipAllUnitUpdateInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?bool $onlyDirectMember = null,
        public readonly ?bool $lastValidOnly = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'OnlyDirectMember' => $this->onlyDirectMember,
            'LastValidOnly' => $this->lastValidOnly,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
