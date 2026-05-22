<?php

namespace Misakstvanu\LaravelSkautis\Requests\Reports;

final class QualificationAllNewSummaryInput
{
    public function __construct(
        public readonly ?string $idQualificationTypeList = null,
        public readonly ?string $from = null,
        public readonly ?string $to = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_QualificationTypeList' => $this->idQualificationTypeList,
            'From' => $this->from,
            'To' => $this->to,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
