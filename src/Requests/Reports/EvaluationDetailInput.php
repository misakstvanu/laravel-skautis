<?php

namespace Misakstvanu\LaravelSkautis\Requests\Reports;

final class EvaluationDetailInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $evaluationPersonCount = null,
        public readonly ?string $fileFormat = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'EvaluationPersonCount' => $this->evaluationPersonCount,
            'FileFormat' => $this->fileFormat,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
