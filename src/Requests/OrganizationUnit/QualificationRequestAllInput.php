<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class QualificationRequestAllInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?int $id = null,
        public readonly ?int $idQualificationType = null,
        public readonly ?string $idQualificationRequestState = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'ID' => $this->id,
            'ID_QualificationType' => $this->idQualificationType,
            'ID_QualificationRequestState' => $this->idQualificationRequestState,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
