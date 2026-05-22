<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantAmountInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGrant = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?string $eventEducationType = null,
        public readonly ?float $amount = null,
        public readonly ?string $note = null,
        public readonly ?int $year = null,
        public readonly ?float $maximumCostsRatio = null,
        public readonly ?string $grantConditions = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Grant' => $this->idGrant,
            'ID_EventEducationType' => $this->idEventEducationType,
            'EventEducationType' => $this->eventEducationType,
            'Amount' => $this->amount,
            'Note' => $this->note,
            'Year' => $this->year,
            'MaximumCostsRatio' => $this->maximumCostsRatio,
            'GrantConditions' => $this->grantConditions,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
