<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class StockTakingAllInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?int $id = null,
        public readonly ?string $idStockTakingState = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $idDocumentStockTaking = null,
        public readonly ?int $idDocumentProtocol = null,
        public readonly ?bool $openOnly = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'ID' => $this->id,
            'ID_StockTakingState' => $this->idStockTakingState,
            'ID_Person' => $this->idPerson,
            'ID_DocumentStockTaking' => $this->idDocumentStockTaking,
            'ID_DocumentProtocol' => $this->idDocumentProtocol,
            'OpenOnly' => $this->openOnly,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
