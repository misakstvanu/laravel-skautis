<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantUpdateAmountInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?float $amount = null,
        public readonly ?float $maximumCostsRatio = null,
        public readonly ?string $grantConditions = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'Amount' => $this->amount,
            'MaximumCostsRatio' => $this->maximumCostsRatio,
            'GrantConditions' => $this->grantConditions,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
