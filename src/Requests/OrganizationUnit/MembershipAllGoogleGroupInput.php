<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class MembershipAllGoogleGroupInput
{
    public function __construct(
        public readonly ?int $idGoogleGroup = null,
        public readonly ?string $person = null,
        public readonly ?bool $onlyDirectMember = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_GoogleGroup' => $this->idGoogleGroup,
            'Person' => $this->person,
            'OnlyDirectMember' => $this->onlyDirectMember,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
