<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationCourseEnrollReminderDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
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

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventEducationCourse: isset($obj->{'ID_EventEducationCourse'}) ? (int) $obj->{'ID_EventEducationCourse'} : null,
            eventEducationCourse: isset($obj->{'EventEducationCourse'}) ? (string) $obj->{'EventEducationCourse'} : null,
            idEventEducation: isset($obj->{'ID_EventEducation'}) ? (int) $obj->{'ID_EventEducation'} : null,
            eventEducation: isset($obj->{'EventEducation'}) ? (string) $obj->{'EventEducation'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            reminder: isset($obj->{'Reminder'}) ? (string) $obj->{'Reminder'} : null,
            reminderSent: isset($obj->{'ReminderSent'}) ? (string) $obj->{'ReminderSent'} : null,
            created: isset($obj->{'Created'}) ? (string) $obj->{'Created'} : null,
            sent: isset($obj->{'Sent'}) ? (string) $obj->{'Sent'} : null,
            hours: isset($obj->{'Hours'}) ? (int) $obj->{'Hours'} : null,
            loginFrom: isset($obj->{'LoginFrom'}) ? (string) $obj->{'LoginFrom'} : null,
            loginTo: isset($obj->{'LoginTo'}) ? (string) $obj->{'LoginTo'} : null,
        );
    }
}
