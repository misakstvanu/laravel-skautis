<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class ProjectQuestionAnswerAllGrantExportInput
{
    public function __construct(
        public readonly ?int $idGrant = null,
        public readonly ?bool $isEvaluation = null,
        public readonly ?bool $isExport = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Grant' => $this->idGrant,
            'IsEvaluation' => $this->isEvaluation,
            'IsExport' => $this->isExport,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
