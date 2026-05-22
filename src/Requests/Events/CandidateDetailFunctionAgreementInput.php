<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class CandidateDetailFunctionAgreementInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $functionText = null,
        public readonly ?string $cityText = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'FunctionText' => $this->functionText,
            'CityText' => $this->cityText,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
