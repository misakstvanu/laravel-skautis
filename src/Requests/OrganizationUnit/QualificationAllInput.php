<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class QualificationAllInput
{
    public function __construct(
        public readonly ?bool $showHistory = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $idQualificationType = null,
        public readonly ?string $qualificationTypeKey = null,
        public readonly ?bool $isValid = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ShowHistory' => $this->showHistory,
            'ID_Person' => $this->idPerson,
            'ID_QualificationType' => $this->idQualificationType,
            'QualificationTypeKey' => $this->qualificationTypeKey,
            'IsValid' => $this->isValid,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
