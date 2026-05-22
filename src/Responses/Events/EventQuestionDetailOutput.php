<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventQuestionDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?string $idQuestionType = null,
        public readonly ?string $questionType = null,
        public readonly ?int $idEventEducationCourse = null,
        public readonly ?string $eventEducationCourse = null,
        public readonly ?string $displayName = null,
        public readonly ?string $help = null,
        public readonly ?string $note = null,
        public readonly ?string $idQuestionRequirement = null,
        public readonly ?string $questionRequirement = null,
        public readonly ?bool $isRequired = null,
        public readonly ?bool $isRequiredEntry = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idQuestionType: isset($obj->{'ID_QuestionType'}) ? (string) $obj->{'ID_QuestionType'} : null,
            questionType: isset($obj->{'QuestionType'}) ? (string) $obj->{'QuestionType'} : null,
            idEventEducationCourse: isset($obj->{'ID_EventEducationCourse'}) ? (int) $obj->{'ID_EventEducationCourse'} : null,
            eventEducationCourse: isset($obj->{'EventEducationCourse'}) ? (string) $obj->{'EventEducationCourse'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            help: isset($obj->{'Help'}) ? (string) $obj->{'Help'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            idQuestionRequirement: isset($obj->{'ID_QuestionRequirement'}) ? (string) $obj->{'ID_QuestionRequirement'} : null,
            questionRequirement: isset($obj->{'QuestionRequirement'}) ? (string) $obj->{'QuestionRequirement'} : null,
            isRequired: isset($obj->{'IsRequired'}) ? (bool) $obj->{'IsRequired'} : null,
            isRequiredEntry: isset($obj->{'IsRequiredEntry'}) ? (bool) $obj->{'IsRequiredEntry'} : null,
        );
    }
}
