<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class MemberCardAllMemberCardInvoiceInput
{
    public function __construct(
        public readonly ?int $idMemberCardInvoice = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_MemberCardInvoice' => $this->idMemberCardInvoice,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
