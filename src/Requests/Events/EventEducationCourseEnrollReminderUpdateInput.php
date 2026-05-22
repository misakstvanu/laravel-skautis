<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationCourseEnrollReminderUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventEducationCourse = null,
        public readonly ?string $eventEducationCourse = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?string $eventEducation = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $reminder = null,
        public readonly ?string $reminderSent = null,
        public readonly ?string $created = null,
        public readonly ?string $sent = null,
        public readonly ?int $hours = null,
        public readonly ?string $loginFrom = null,
        public readonly ?string $loginTo = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EventEducationCourse' => $this->idEventEducationCourse,
            'EventEducationCourse' => $this->eventEducationCourse,
            'ID_EventEducation' => $this->idEventEducation,
            'EventEducation' => $this->eventEducation,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'Reminder' => $this->reminder,
            'ReminderSent' => $this->reminderSent,
            'Created' => $this->created,
            'Sent' => $this->sent,
            'Hours' => $this->hours,
            'LoginFrom' => $this->loginFrom,
            'LoginTo' => $this->loginTo,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
