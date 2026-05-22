<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class ParticipantCourseTermAllInput
{
    public function __construct(
        public readonly ?int $idGrant = null,
        public readonly ?int $int = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Grant' => $this->idGrant,
            'int' => $this->int,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
