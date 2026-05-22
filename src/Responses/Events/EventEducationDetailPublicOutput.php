<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationDetailPublicOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idEventEducationState = null,
        public readonly ?string $eventEducationState = null,
        public readonly ?string $web = null,
        public readonly ?string $emailContact = null,
        public readonly ?string $phoneContact = null,
        public readonly ?string $logoFileName = null,
        public readonly ?string $description = null,
        public readonly ?string $note = null,
        public readonly ?int $idEvent = null,
        public readonly ?string $event = null,
        public readonly ?bool $loginSkautis = null,
        public readonly ?string $loginLocation = null,
        public readonly ?int $participantCount = null,
        public readonly ?int $participantSubstituteCount = null,
        public readonly ?float $fulfillment = null,
        public readonly ?string $firstTerm = null,
        public readonly ?string $lastTerm = null,
        public readonly ?int $duration = null,
        public readonly ?string $registrationDeadline = null,
        public readonly ?int $courseDuration = null,
        public readonly ?float $fulfilment = null,
        public readonly ?string $loginFrom = null,
        public readonly ?string $loginTo = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idEventEducationState: isset($obj->{'ID_EventEducationState'}) ? (string) $obj->{'ID_EventEducationState'} : null,
            eventEducationState: isset($obj->{'EventEducationState'}) ? (string) $obj->{'EventEducationState'} : null,
            web: isset($obj->{'Web'}) ? (string) $obj->{'Web'} : null,
            emailContact: isset($obj->{'EmailContact'}) ? (string) $obj->{'EmailContact'} : null,
            phoneContact: isset($obj->{'PhoneContact'}) ? (string) $obj->{'PhoneContact'} : null,
            logoFileName: isset($obj->{'LogoFileName'}) ? (string) $obj->{'LogoFileName'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            idEvent: isset($obj->{'ID_Event'}) ? (int) $obj->{'ID_Event'} : null,
            event: isset($obj->{'Event'}) ? (string) $obj->{'Event'} : null,
            loginSkautis: isset($obj->{'LoginSkautis'}) ? (bool) $obj->{'LoginSkautis'} : null,
            loginLocation: isset($obj->{'LoginLocation'}) ? (string) $obj->{'LoginLocation'} : null,
            participantCount: isset($obj->{'ParticipantCount'}) ? (int) $obj->{'ParticipantCount'} : null,
            participantSubstituteCount: isset($obj->{'ParticipantSubstituteCount'}) ? (int) $obj->{'ParticipantSubstituteCount'} : null,
            fulfillment: isset($obj->{'Fulfillment'}) ? (float) $obj->{'Fulfillment'} : null,
            firstTerm: isset($obj->{'FirstTerm'}) ? (string) $obj->{'FirstTerm'} : null,
            lastTerm: isset($obj->{'LastTerm'}) ? (string) $obj->{'LastTerm'} : null,
            duration: isset($obj->{'Duration'}) ? (int) $obj->{'Duration'} : null,
            registrationDeadline: isset($obj->{'RegistrationDeadline'}) ? (string) $obj->{'RegistrationDeadline'} : null,
            courseDuration: isset($obj->{'CourseDuration'}) ? (int) $obj->{'CourseDuration'} : null,
            fulfilment: isset($obj->{'Fulfilment'}) ? (float) $obj->{'Fulfilment'} : null,
            loginFrom: isset($obj->{'LoginFrom'}) ? (string) $obj->{'LoginFrom'} : null,
            loginTo: isset($obj->{'LoginTo'}) ? (string) $obj->{'LoginTo'} : null,
        );
    }
}
