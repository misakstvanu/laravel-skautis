<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class CampQuestionAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventCamp = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EventCamp' => $this->idEventCamp,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
