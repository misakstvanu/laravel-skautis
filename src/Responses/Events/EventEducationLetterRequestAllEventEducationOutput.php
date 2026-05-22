<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationLetterRequestAllEventEducationOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idParticipantEducationExam = null,
        public readonly ?string $idEventEducationLetterRequestState = null,
        public readonly ?string $eventEducationLetterRequestState = null,
        public readonly ?string $date = null,
        public readonly ?string $letterNumber = null,
        public readonly ?string $dateGenerated = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idParticipantEducationExam: isset($obj->{'ID_ParticipantEducationExam'}) ? (int) $obj->{'ID_ParticipantEducationExam'} : null,
            idEventEducationLetterRequestState: isset($obj->{'ID_EventEducationLetterRequestState'}) ? (string) $obj->{'ID_EventEducationLetterRequestState'} : null,
            eventEducationLetterRequestState: isset($obj->{'EventEducationLetterRequestState'}) ? (string) $obj->{'EventEducationLetterRequestState'} : null,
            date: isset($obj->{'Date'}) ? (string) $obj->{'Date'} : null,
            letterNumber: isset($obj->{'LetterNumber'}) ? (string) $obj->{'LetterNumber'} : null,
            dateGenerated: isset($obj->{'DateGenerated'}) ? (string) $obj->{'DateGenerated'} : null,
        );
    }
}
