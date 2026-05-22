<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class CandidateDetailAgreementTemplateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idFunctionType = null,
        public readonly ?string $cityText = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_FunctionType' => $this->idFunctionType,
            'CityText' => $this->cityText,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
