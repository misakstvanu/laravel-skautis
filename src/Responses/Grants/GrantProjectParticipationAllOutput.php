<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantProjectParticipationAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGrantProject = null,
        public readonly ?string $grantProject = null,
        public readonly ?string $idProjectParticipationCategory = null,
        public readonly ?string $projectParticipationCategory = null,
        public readonly ?int $count = null,
        public readonly ?int $personDays = null,
        public readonly ?string $projectParticipationCategoryHelp = null,
        public readonly ?string $idGrantType = null,
        public readonly ?bool $isComputed = null,
        public readonly ?bool $isEditable = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idGrantProject: isset($obj->{'ID_GrantProject'}) ? (int) $obj->{'ID_GrantProject'} : null,
            grantProject: isset($obj->{'GrantProject'}) ? (string) $obj->{'GrantProject'} : null,
            idProjectParticipationCategory: isset($obj->{'ID_ProjectParticipationCategory'}) ? (string) $obj->{'ID_ProjectParticipationCategory'} : null,
            projectParticipationCategory: isset($obj->{'ProjectParticipationCategory'}) ? (string) $obj->{'ProjectParticipationCategory'} : null,
            count: isset($obj->{'Count'}) ? (int) $obj->{'Count'} : null,
            personDays: isset($obj->{'PersonDays'}) ? (int) $obj->{'PersonDays'} : null,
            projectParticipationCategoryHelp: isset($obj->{'ProjectParticipationCategoryHelp'}) ? (string) $obj->{'ProjectParticipationCategoryHelp'} : null,
            idGrantType: isset($obj->{'ID_GrantType'}) ? (string) $obj->{'ID_GrantType'} : null,
            isComputed: isset($obj->{'IsComputed'}) ? (bool) $obj->{'IsComputed'} : null,
            isEditable: isset($obj->{'IsEditable'}) ? (bool) $obj->{'IsEditable'} : null,
        );
    }
}
