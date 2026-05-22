<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventQuestionAnswerDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idEventQuestion = null,
        public readonly ?string $eventEducationCourse = null,
        public readonly ?int $idEventEducationCourse = null,
        public readonly ?string $value = null,
        public readonly ?int $idDocument = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventQuestion: isset($obj->{'ID_EventQuestion'}) ? (int) $obj->{'ID_EventQuestion'} : null,
            eventEducationCourse: isset($obj->{'EventEducationCourse'}) ? (string) $obj->{'EventEducationCourse'} : null,
            idEventEducationCourse: isset($obj->{'ID_EventEducationCourse'}) ? (int) $obj->{'ID_EventEducationCourse'} : null,
            value: isset($obj->{'Value'}) ? (string) $obj->{'Value'} : null,
            idDocument: isset($obj->{'ID_Document'}) ? (int) $obj->{'ID_Document'} : null,
        );
    }
}
