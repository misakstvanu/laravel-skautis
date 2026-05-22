<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class MemberCardAllInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?int $id = null,
        public readonly ?string $idMemberCardState = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idMemberCardType = null,
        public readonly ?int $idPersonSchool = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'ID' => $this->id,
            'ID_MemberCardState' => $this->idMemberCardState,
            'DisplayName' => $this->displayName,
            'ID_MemberCardType' => $this->idMemberCardType,
            'ID_PersonSchool' => $this->idPersonSchool,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
