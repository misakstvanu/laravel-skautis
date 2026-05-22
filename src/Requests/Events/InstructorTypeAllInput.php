<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class InstructorTypeAllInput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idEventEducation = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_EventEducation' => $this->idEventEducation,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
