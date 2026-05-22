<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationTermAllInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idEventEducationLocation = null,
        public readonly ?int $year = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID_EventEducation' => $this->idEventEducation,
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_EventEducationLocation' => $this->idEventEducationLocation,
            'Year' => $this->year,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
