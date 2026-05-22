<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class QualificationAllNewInput
{
    public function __construct(
        public readonly ?string $from = null,
        public readonly ?string $to = null,
        public readonly ?string $idQualificationTypeList = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'From' => $this->from,
            'To' => $this->to,
            'ID_QualificationTypeList' => $this->idQualificationTypeList,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
