<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantCostEvidenceInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $description = null,
        public readonly ?float $amount = null,
        public readonly ?float $grantAmount = null,
        public readonly ?string $evidenceExtension = null,
        public readonly ?string $note = null,
        public readonly ?int $idGrant = null,
        public readonly ?string $evidenceDate = null,
        public readonly ?string $idTempFile = null,
        public readonly ?string $evidenceFile = null,
        public readonly ?bool $deleteScan = null,
        public readonly ?int $year = null,
        public readonly ?int $idDocument = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'Description' => $this->description,
            'Amount' => $this->amount,
            'GrantAmount' => $this->grantAmount,
            'EvidenceExtension' => $this->evidenceExtension,
            'Note' => $this->note,
            'ID_Grant' => $this->idGrant,
            'EvidenceDate' => $this->evidenceDate,
            'ID_TempFile' => $this->idTempFile,
            'EvidenceFile' => $this->evidenceFile,
            'DeleteScan' => $this->deleteScan,
            'Year' => $this->year,
            'ID_Document' => $this->idDocument,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
