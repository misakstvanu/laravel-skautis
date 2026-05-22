<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationAllCalendarPublicInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $idEventEducationType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID_EventEducationType' => $this->idEventEducationType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
