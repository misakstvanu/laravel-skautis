<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class RatingUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?float $scoreFrom = null,
        public readonly ?float $scoreTo = null,
        public readonly ?string $color = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ScoreFrom' => $this->scoreFrom,
            'ScoreTo' => $this->scoreTo,
            'Color' => $this->color,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
