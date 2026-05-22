<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventQuestionAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idQuestionType = null,
        public readonly ?string $questionType = null,
        public readonly ?bool $expandLabels = null,
        public readonly ?int $idEventEducationCourse = null,
        public readonly ?string $eventEducationCourse = null,
        public readonly ?string $displayName = null,
        public readonly ?string $help = null,
        public readonly ?string $note = null,
        public readonly ?string $idQuestionRequirement = null,
        public readonly ?string $questionRequirement = null,
        public readonly ?bool $isRequired = null,
        public readonly ?bool $isRequiredEntry = null,
        public readonly ?int $idParticipantEducation = null,
        public readonly ?int $idEventQuestionAnswer = null,
        public readonly ?string $eventQuestionAnswerValue = null,
        public readonly ?int $idDocumentEventQuestionAnswer = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idQuestionType: isset($obj->{'ID_QuestionType'}) ? (string) $obj->{'ID_QuestionType'} : null,
            questionType: isset($obj->{'QuestionType'}) ? (string) $obj->{'QuestionType'} : null,
            expandLabels: isset($obj->{'ExpandLabels'}) ? (bool) $obj->{'ExpandLabels'} : null,
            idEventEducationCourse: isset($obj->{'ID_EventEducationCourse'}) ? (int) $obj->{'ID_EventEducationCourse'} : null,
            eventEducationCourse: isset($obj->{'EventEducationCourse'}) ? (string) $obj->{'EventEducationCourse'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            help: isset($obj->{'Help'}) ? (string) $obj->{'Help'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            idQuestionRequirement: isset($obj->{'ID_QuestionRequirement'}) ? (string) $obj->{'ID_QuestionRequirement'} : null,
            questionRequirement: isset($obj->{'QuestionRequirement'}) ? (string) $obj->{'QuestionRequirement'} : null,
            isRequired: isset($obj->{'IsRequired'}) ? (bool) $obj->{'IsRequired'} : null,
            isRequiredEntry: isset($obj->{'IsRequiredEntry'}) ? (bool) $obj->{'IsRequiredEntry'} : null,
            idParticipantEducation: isset($obj->{'ID_ParticipantEducation'}) ? (int) $obj->{'ID_ParticipantEducation'} : null,
            idEventQuestionAnswer: isset($obj->{'ID_EventQuestionAnswer'}) ? (int) $obj->{'ID_EventQuestionAnswer'} : null,
            eventQuestionAnswerValue: isset($obj->{'EventQuestionAnswerValue'}) ? (string) $obj->{'EventQuestionAnswerValue'} : null,
            idDocumentEventQuestionAnswer: isset($obj->{'ID_DocumentEventQuestionAnswer'}) ? (int) $obj->{'ID_DocumentEventQuestionAnswer'} : null,
        );
    }
}
