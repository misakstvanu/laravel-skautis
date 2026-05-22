<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantProjectParticipationAllGrantOutput
{
    public function __construct(
        public readonly ?string $idProjectParticipationCategory = null,
        public readonly ?string $projectParticipationCategory = null,
        public readonly ?int $count = null,
        public readonly ?int $personDays = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idProjectParticipationCategory: isset($obj->{'ID_ProjectParticipationCategory'}) ? (string) $obj->{'ID_ProjectParticipationCategory'} : null,
            projectParticipationCategory: isset($obj->{'ProjectParticipationCategory'}) ? (string) $obj->{'ProjectParticipationCategory'} : null,
            count: isset($obj->{'Count'}) ? (int) $obj->{'Count'} : null,
            personDays: isset($obj->{'PersonDays'}) ? (int) $obj->{'PersonDays'} : null,
        );
    }
}
