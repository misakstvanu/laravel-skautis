<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationLetterRequestAllConflictCheckOutput
{
    public function __construct(
        public readonly ?string $event = null,
        public readonly ?string $eventColliding = null,
        public readonly ?int $idEventEducationLetterRequest = null,
        public readonly ?int $idEventEducationLetterRequestColliding = null,
        public readonly ?string $letterNumber = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            event: isset($obj->{'Event'}) ? (string) $obj->{'Event'} : null,
            eventColliding: isset($obj->{'EventColliding'}) ? (string) $obj->{'EventColliding'} : null,
            idEventEducationLetterRequest: isset($obj->{'ID_EventEducationLetterRequest'}) ? (int) $obj->{'ID_EventEducationLetterRequest'} : null,
            idEventEducationLetterRequestColliding: isset($obj->{'ID_EventEducationLetterRequestColliding'}) ? (int) $obj->{'ID_EventEducationLetterRequestColliding'} : null,
            letterNumber: isset($obj->{'LetterNumber'}) ? (string) $obj->{'LetterNumber'} : null,
        );
    }
}
