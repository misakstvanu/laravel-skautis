<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationLocationAllInput
{
    public function __construct(
        public readonly ?int $idEventEducation = null,
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventEducation' => $this->idEventEducation,
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
