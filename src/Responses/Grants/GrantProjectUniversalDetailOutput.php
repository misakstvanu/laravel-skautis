<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantProjectUniversalDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?int $idGrant = null,
        public readonly ?string $goal = null,
        public readonly ?string $projectCharacteristic = null,
        public readonly ?string $description = null,
        public readonly ?string $information = null,
        public readonly ?string $targetGroup = null,
        public readonly ?bool $hasCustomQuestions = null,
        public readonly mixed $projectQuestion = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            idGrant: isset($obj->{'ID_Grant'}) ? (int) $obj->{'ID_Grant'} : null,
            goal: isset($obj->{'Goal'}) ? (string) $obj->{'Goal'} : null,
            projectCharacteristic: isset($obj->{'ProjectCharacteristic'}) ? (string) $obj->{'ProjectCharacteristic'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            information: isset($obj->{'Information'}) ? (string) $obj->{'Information'} : null,
            targetGroup: isset($obj->{'TargetGroup'}) ? (string) $obj->{'TargetGroup'} : null,
            hasCustomQuestions: isset($obj->{'HasCustomQuestions'}) ? (bool) $obj->{'HasCustomQuestions'} : null,
            projectQuestion: $obj->{'ProjectQuestion'} ?? null,
        );
    }
}
