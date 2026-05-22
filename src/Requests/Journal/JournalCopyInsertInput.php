<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class JournalCopyInsertInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?int $idJournal = null,
        public readonly ?string $dateSent = null,
        public readonly ?float $price = null,
        public readonly ?int $idVatRate = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'ID_Journal' => $this->idJournal,
            'DateSent' => $this->dateSent,
            'Price' => $this->price,
            'ID_VatRate' => $this->idVatRate,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
