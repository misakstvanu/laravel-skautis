<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class MemberCardInvoiceAllXmlInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idMemberCardInvoiceGenerate = null,
        public readonly ?string $idMemberCardInvoiceState = null,
        public readonly ?string $dateGeneratingFrom = null,
        public readonly ?string $dateGeneratingTo = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_MemberCardInvoiceGenerate' => $this->idMemberCardInvoiceGenerate,
            'ID_MemberCardInvoiceState' => $this->idMemberCardInvoiceState,
            'DateGeneratingFrom' => $this->dateGeneratingFrom,
            'DateGeneratingTo' => $this->dateGeneratingTo,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
