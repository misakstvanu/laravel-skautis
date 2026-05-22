<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class CampLoginQuestionAllAnswerOutput
{
    public function __construct(
        public readonly ?int $idCampLoginQuestion = null,
        public readonly ?int $idCampFixedQuestion = null,
        public readonly ?string $idLoginQuestionType = null,
        public readonly ?string $loginQuestionType = null,
        public readonly ?bool $expandLabels = null,
        public readonly ?string $displayName = null,
        public readonly ?string $help = null,
        public readonly ?string $note = null,
        public readonly ?string $idLoginQuestionRequirement = null,
        public readonly ?string $loginQuestionRequirement = null,
        public readonly ?int $order = null,
        public readonly ?int $idLoginQuestionAnswer = null,
        public readonly ?string $loginQuestionAnswerValue = null,
        public readonly ?int $idDocumentLoginQuestionAnswer = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idCampLoginQuestion: isset($obj->{'ID_CampLoginQuestion'}) ? (int) $obj->{'ID_CampLoginQuestion'} : null,
            idCampFixedQuestion: isset($obj->{'ID_CampFixedQuestion'}) ? (int) $obj->{'ID_CampFixedQuestion'} : null,
            idLoginQuestionType: isset($obj->{'ID_LoginQuestionType'}) ? (string) $obj->{'ID_LoginQuestionType'} : null,
            loginQuestionType: isset($obj->{'LoginQuestionType'}) ? (string) $obj->{'LoginQuestionType'} : null,
            expandLabels: isset($obj->{'ExpandLabels'}) ? (bool) $obj->{'ExpandLabels'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            help: isset($obj->{'Help'}) ? (string) $obj->{'Help'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            idLoginQuestionRequirement: isset($obj->{'ID_LoginQuestionRequirement'}) ? (string) $obj->{'ID_LoginQuestionRequirement'} : null,
            loginQuestionRequirement: isset($obj->{'LoginQuestionRequirement'}) ? (string) $obj->{'LoginQuestionRequirement'} : null,
            order: isset($obj->{'Order'}) ? (int) $obj->{'Order'} : null,
            idLoginQuestionAnswer: isset($obj->{'ID_LoginQuestionAnswer'}) ? (int) $obj->{'ID_LoginQuestionAnswer'} : null,
            loginQuestionAnswerValue: isset($obj->{'LoginQuestionAnswerValue'}) ? (string) $obj->{'LoginQuestionAnswerValue'} : null,
            idDocumentLoginQuestionAnswer: isset($obj->{'ID_DocumentLoginQuestionAnswer'}) ? (int) $obj->{'ID_DocumentLoginQuestionAnswer'} : null,
        );
    }
}
