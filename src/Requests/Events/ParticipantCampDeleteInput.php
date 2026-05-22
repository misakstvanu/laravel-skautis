<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class ParticipantCampDeleteInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $deletePerson = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DeletePerson' => $this->deletePerson,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
