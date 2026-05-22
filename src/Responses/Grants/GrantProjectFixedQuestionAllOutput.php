<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantProjectFixedQuestionAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idProjectQuestionType = null,
        public readonly ?string $projectQuestionType = null,
        public readonly ?string $displayName = null,
        public readonly ?string $help = null,
        public readonly ?string $validTo = null,
        public readonly ?string $note = null,
        public readonly ?int $order = null,
        public readonly ?string $idGrantType = null,
        public readonly ?string $grantType = null,
        public readonly ?string $idProjectQuestionRequirement = null,
        public readonly ?string $projectQuestionRequirement = null,
        public readonly ?bool $isEvaluation = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idProjectQuestionType: isset($obj->{'ID_ProjectQuestionType'}) ? (string) $obj->{'ID_ProjectQuestionType'} : null,
            projectQuestionType: isset($obj->{'ProjectQuestionType'}) ? (string) $obj->{'ProjectQuestionType'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            help: isset($obj->{'Help'}) ? (string) $obj->{'Help'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            order: isset($obj->{'Order'}) ? (int) $obj->{'Order'} : null,
            idGrantType: isset($obj->{'ID_GrantType'}) ? (string) $obj->{'ID_GrantType'} : null,
            grantType: isset($obj->{'GrantType'}) ? (string) $obj->{'GrantType'} : null,
            idProjectQuestionRequirement: isset($obj->{'ID_ProjectQuestionRequirement'}) ? (string) $obj->{'ID_ProjectQuestionRequirement'} : null,
            projectQuestionRequirement: isset($obj->{'ProjectQuestionRequirement'}) ? (string) $obj->{'ProjectQuestionRequirement'} : null,
            isEvaluation: isset($obj->{'IsEvaluation'}) ? (bool) $obj->{'IsEvaluation'} : null,
        );
    }
}
