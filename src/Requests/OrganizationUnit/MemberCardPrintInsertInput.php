<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class MemberCardPrintInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $dateCreate = null,
        public readonly ?string $idMemberCardPrintState = null,
        public readonly ?string $memberCardPrintState = null,
        public readonly ?string $dateGenerated = null,
        public readonly ?string $error = null,
        public readonly ?int $count = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DateCreate' => $this->dateCreate,
            'ID_MemberCardPrintState' => $this->idMemberCardPrintState,
            'MemberCardPrintState' => $this->memberCardPrintState,
            'DateGenerated' => $this->dateGenerated,
            'Error' => $this->error,
            'Count' => $this->count,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
