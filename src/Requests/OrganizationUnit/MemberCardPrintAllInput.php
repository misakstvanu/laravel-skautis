<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class MemberCardPrintAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idMemberCardPrintState = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_MemberCardPrintState' => $this->idMemberCardPrintState,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
