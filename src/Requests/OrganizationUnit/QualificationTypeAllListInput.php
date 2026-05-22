<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class QualificationTypeAllListInput
{
    public function __construct(
        public readonly ?string $idQualificationTypeList = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_QualificationTypeList' => $this->idQualificationTypeList,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
