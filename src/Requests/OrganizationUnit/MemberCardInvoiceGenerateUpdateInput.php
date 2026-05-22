<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class MemberCardInvoiceGenerateUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $dateGenerating = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $idMemberCardInvoiceGenerateState = null,
        public readonly ?string $memberCardInvoiceGenerateState = null,
        public readonly ?int $idError = null,
        public readonly ?string $error = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DateGenerating' => $this->dateGenerating,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'ID_MemberCardInvoiceGenerateState' => $this->idMemberCardInvoiceGenerateState,
            'MemberCardInvoiceGenerateState' => $this->memberCardInvoiceGenerateState,
            'ID_Error' => $this->idError,
            'Error' => $this->error,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
