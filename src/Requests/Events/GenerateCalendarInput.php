<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class GenerateCalendarInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $startDate = null,
        public readonly ?string $endDate = null,
        public readonly ?string $description = null,
        public readonly ?string $displayName = null,
        public readonly ?string $eventType = null,
        public readonly ?string $courseDisplayName = null,
        public readonly ?string $registrationDeadline = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'StartDate' => $this->startDate,
            'EndDate' => $this->endDate,
            'Description' => $this->description,
            'DisplayName' => $this->displayName,
            'EventType' => $this->eventType,
            'CourseDisplayName' => $this->courseDisplayName,
            'RegistrationDeadline' => $this->registrationDeadline,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
