<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class StatementUpdateBatchInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $idStatement = null,
        public readonly mixed $statementEntries = null,
        public readonly ?bool $valuesInThousands = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID_Statement' => $this->idStatement,
            'StatementEntries' => $this->statementEntries,
            'ValuesInThousands' => $this->valuesInThousands,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
