<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonRegistrationInsertInput
{
    public function __construct(
        public readonly ?int $idMembership = null,
        public readonly ?int $idRegistrationCategory = null,
        public readonly ?int $int = null,
        public readonly ?bool $registerWithMemberCard = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Membership' => $this->idMembership,
            'ID_RegistrationCategory' => $this->idRegistrationCategory,
            'int' => $this->int,
            'RegisterWithMemberCard' => $this->registerWithMemberCard,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
