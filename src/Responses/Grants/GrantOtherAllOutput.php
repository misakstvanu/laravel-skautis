<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantOtherAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGrant = null,
        public readonly ?string $goal = null,
        public readonly ?string $description = null,
        public readonly ?string $targetGroup = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idGrant: isset($obj->{'ID_Grant'}) ? (int) $obj->{'ID_Grant'} : null,
            goal: isset($obj->{'Goal'}) ? (string) $obj->{'Goal'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            targetGroup: isset($obj->{'TargetGroup'}) ? (string) $obj->{'TargetGroup'} : null,
        );
    }
}
