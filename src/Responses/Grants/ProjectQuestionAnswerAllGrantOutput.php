<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class ProjectQuestionAnswerAllGrantOutput
{
    public function __construct(
        public readonly ?int $idGrantProjectQuestion = null,
        public readonly ?int $idGrantProjectFixedQuestion = null,
        public readonly ?string $idProjectQuestionType = null,
        public readonly ?string $projectQuestionType = null,
        public readonly ?bool $expandLabels = null,
        public readonly ?string $displayName = null,
        public readonly ?string $help = null,
        public readonly ?string $note = null,
        public readonly ?string $idProjectQuestionRequirement = null,
        public readonly ?string $projectQuestionRequirement = null,
        public readonly ?int $order = null,
        public readonly ?int $idProjectQuestionAnswer = null,
        public readonly ?string $projectQuestionAnswerValue = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idGrantProjectQuestion: isset($obj->{'ID_GrantProjectQuestion'}) ? (int) $obj->{'ID_GrantProjectQuestion'} : null,
            idGrantProjectFixedQuestion: isset($obj->{'ID_GrantProjectFixedQuestion'}) ? (int) $obj->{'ID_GrantProjectFixedQuestion'} : null,
            idProjectQuestionType: isset($obj->{'ID_ProjectQuestionType'}) ? (string) $obj->{'ID_ProjectQuestionType'} : null,
            projectQuestionType: isset($obj->{'ProjectQuestionType'}) ? (string) $obj->{'ProjectQuestionType'} : null,
            expandLabels: isset($obj->{'ExpandLabels'}) ? (bool) $obj->{'ExpandLabels'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            help: isset($obj->{'Help'}) ? (string) $obj->{'Help'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            idProjectQuestionRequirement: isset($obj->{'ID_ProjectQuestionRequirement'}) ? (string) $obj->{'ID_ProjectQuestionRequirement'} : null,
            projectQuestionRequirement: isset($obj->{'ProjectQuestionRequirement'}) ? (string) $obj->{'ProjectQuestionRequirement'} : null,
            order: isset($obj->{'Order'}) ? (int) $obj->{'Order'} : null,
            idProjectQuestionAnswer: isset($obj->{'ID_ProjectQuestionAnswer'}) ? (int) $obj->{'ID_ProjectQuestionAnswer'} : null,
            projectQuestionAnswerValue: isset($obj->{'ProjectQuestionAnswerValue'}) ? (string) $obj->{'ProjectQuestionAnswerValue'} : null,
        );
    }
}
