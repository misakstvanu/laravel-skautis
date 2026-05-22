<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class MemberCardInvoiceGenerateAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $idMemberCardInvoiceGenerateState = null,
        public readonly ?int $idError = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            'ID_MemberCardInvoiceGenerateState' => $this->idMemberCardInvoiceGenerateState,
            'ID_Error' => $this->idError,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
