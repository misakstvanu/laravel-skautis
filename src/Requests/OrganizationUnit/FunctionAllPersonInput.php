<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class FunctionAllPersonInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $idFunctionType = null,
        public readonly ?string $idFunctionReason = null,
        public readonly ?bool $showHistory = null,
        public readonly ?bool $isOficial = null,
        public readonly ?bool $isValid = null,
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
            'ShowHistory' => $this->showHistory,
            'IsOficial' => $this->isOficial,
            'IsValid' => $this->isValid,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
