<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationAllCalendarPublicOutput
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

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            startDate: isset($obj->{'StartDate'}) ? (string) $obj->{'StartDate'} : null,
            endDate: isset($obj->{'EndDate'}) ? (string) $obj->{'EndDate'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            eventType: isset($obj->{'EventType'}) ? (string) $obj->{'EventType'} : null,
            courseDisplayName: isset($obj->{'CourseDisplayName'}) ? (string) $obj->{'CourseDisplayName'} : null,
            registrationDeadline: isset($obj->{'RegistrationDeadline'}) ? (string) $obj->{'RegistrationDeadline'} : null,
        );
    }
}
