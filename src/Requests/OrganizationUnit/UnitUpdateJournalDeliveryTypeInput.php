<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitUpdateJournalDeliveryTypeInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idJournalDeliveryType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_JournalDeliveryType' => $this->idJournalDeliveryType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
