<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationAllEvaluationInput
{
    public function __construct(
        public readonly ?int $idEventEducationType = null,
        public readonly ?bool $isParent = null,
        public readonly ?int $year = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventEducationType' => $this->idEventEducationType,
            'IsParent' => $this->isParent,
            'Year' => $this->year,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
