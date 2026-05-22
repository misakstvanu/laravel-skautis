<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class RequestAllInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?int $idUserCreate = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $idUserDecision = null,
        public readonly ?string $idMembershipType = null,
        public readonly ?string $idMembershipCategory = null,
        public readonly ?string $idRequestState = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'ID_UserCreate' => $this->idUserCreate,
            'ID_Unit' => $this->idUnit,
            'ID_UserDecision' => $this->idUserDecision,
            'ID_MembershipType' => $this->idMembershipType,
            'ID_MembershipCategory' => $this->idMembershipCategory,
            'ID_RequestState' => $this->idRequestState,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
