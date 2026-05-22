<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class MemberCardAllRequestInput
{
    public function __construct(
        public readonly ?int $idMemberCardPrint = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_MemberCardPrint' => $this->idMemberCardPrint,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
