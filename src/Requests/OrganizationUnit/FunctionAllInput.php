<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class FunctionAllInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $idFunctionType = null,
        public readonly ?string $idFunctionReason = null,
        public readonly ?bool $isValid = null,
        public readonly ?bool $showHistory = null,
        public readonly ?bool $isAgency = null,
        public readonly ?int $idAgency = null,
        public readonly ?string $person = null,
        public readonly ?bool $isStatutory = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'ID_Unit' => $this->idUnit,
            'ID_FunctionType' => $this->idFunctionType,
            'ID_FunctionReason' => $this->idFunctionReason,
            'IsValid' => $this->isValid,
            'ShowHistory' => $this->showHistory,
            'IsAgency' => $this->isAgency,
            'ID_Agency' => $this->idAgency,
            'Person' => $this->person,
            'IsStatutory' => $this->isStatutory,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
