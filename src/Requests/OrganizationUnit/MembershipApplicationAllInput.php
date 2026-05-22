<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class MembershipApplicationAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $idMembershipApplicationState = null,
        public readonly ?string $string = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Unit' => $this->idUnit,
            'ID_Person' => $this->idPerson,
            'ID_MembershipApplicationState' => $this->idMembershipApplicationState,
            'string' => $this->string,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
