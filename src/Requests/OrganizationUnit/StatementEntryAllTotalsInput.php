<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class StatementEntryAllTotalsInput
{
    public function __construct(
        public readonly ?int $idStatement = null,
        public readonly ?int $idStatementEntryType = null,
        public readonly ?bool $isMoney = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Statement' => $this->idStatement,
            'ID_StatementEntryType' => $this->idStatementEntryType,
            'IsMoney' => $this->isMoney,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
