<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationAllYearCreateInput
{
    public function __construct(
        public readonly ?bool $isUnit = null,
        public readonly ?bool $isEventEducation = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'IsUnit' => $this->isUnit,
            'IsEventEducation' => $this->isEventEducation,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
