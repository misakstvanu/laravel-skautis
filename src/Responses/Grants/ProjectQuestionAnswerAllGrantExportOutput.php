<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class ProjectQuestionAnswerAllGrantExportOutput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?string $idProjectQuestionType = null,
        public readonly ?string $projectQuestionAnswerValue = null,
        public readonly ?string $projectQuestionAnswerValueDecoded = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idProjectQuestionType: isset($obj->{'ID_ProjectQuestionType'}) ? (string) $obj->{'ID_ProjectQuestionType'} : null,
            projectQuestionAnswerValue: isset($obj->{'ProjectQuestionAnswerValue'}) ? (string) $obj->{'ProjectQuestionAnswerValue'} : null,
            projectQuestionAnswerValueDecoded: isset($obj->{'ProjectQuestionAnswerValueDecoded'}) ? (string) $obj->{'ProjectQuestionAnswerValueDecoded'} : null,
        );
    }
}
