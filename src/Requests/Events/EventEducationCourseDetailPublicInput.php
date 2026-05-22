<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationCourseDetailPublicInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idApplication = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Application' => $this->idApplication,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
