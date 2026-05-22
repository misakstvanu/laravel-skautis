<?php

namespace Misakstvanu\LaravelSkautis\Requests\Reports;

final class CodeInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idTable = null,
        public readonly ?string $idColumn = null,
        public readonly ?string $barcodeType = null,
        public readonly ?string $fileName = null,
        public readonly ?string $text = null,
        public readonly ?int $barcodeHeight = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Table' => $this->idTable,
            'ID_Column' => $this->idColumn,
            'BarcodeType' => $this->barcodeType,
            'FileName' => $this->fileName,
            'Text' => $this->text,
            'BarcodeHeight' => $this->barcodeHeight,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
