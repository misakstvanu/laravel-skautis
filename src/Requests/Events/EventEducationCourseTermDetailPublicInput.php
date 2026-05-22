<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationCourseTermDetailPublicInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idApplication = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Application' => $this->idApplication,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
