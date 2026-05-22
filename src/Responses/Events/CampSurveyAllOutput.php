<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class CampSurveyAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $idEvent = null,
        public readonly ?string $event = null,
        public readonly ?int $idCampQuestion = null,
        public readonly ?string $campQuestion = null,
        public readonly ?int $idCampAnswer = null,
        public readonly ?string $campAnswer = null,
        public readonly ?string $html = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            idEvent: isset($obj->{'ID_Event'}) ? (int) $obj->{'ID_Event'} : null,
            event: isset($obj->{'Event'}) ? (string) $obj->{'Event'} : null,
            idCampQuestion: isset($obj->{'ID_CampQuestion'}) ? (int) $obj->{'ID_CampQuestion'} : null,
            campQuestion: isset($obj->{'CampQuestion'}) ? (string) $obj->{'CampQuestion'} : null,
            idCampAnswer: isset($obj->{'ID_CampAnswer'}) ? (int) $obj->{'ID_CampAnswer'} : null,
            campAnswer: isset($obj->{'CampAnswer'}) ? (string) $obj->{'CampAnswer'} : null,
            html: isset($obj->{'Html'}) ? (string) $obj->{'Html'} : null,
        );
    }
}
