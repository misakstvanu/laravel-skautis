<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantEventAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?int $idGrant = null,
        public readonly ?string $displayName = null,
        public readonly ?string $description = null,
        public readonly ?string $place = null,
        public readonly ?int $count = null,
        public readonly ?int $days = null,
        public readonly ?int $childrenCount = null,
        public readonly ?int $youngCount = null,
        public readonly ?int $otherCount = null,
        public readonly ?int $personDays = null,
        public readonly ?bool $isEstimation = null,
        public readonly ?int $idGrantEvent = null,
        public readonly ?bool $isCustomDays = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            idGrant: isset($obj->{'ID_Grant'}) ? (int) $obj->{'ID_Grant'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            place: isset($obj->{'Place'}) ? (string) $obj->{'Place'} : null,
            count: isset($obj->{'Count'}) ? (int) $obj->{'Count'} : null,
            days: isset($obj->{'Days'}) ? (int) $obj->{'Days'} : null,
            childrenCount: isset($obj->{'ChildrenCount'}) ? (int) $obj->{'ChildrenCount'} : null,
            youngCount: isset($obj->{'YoungCount'}) ? (int) $obj->{'YoungCount'} : null,
            otherCount: isset($obj->{'OtherCount'}) ? (int) $obj->{'OtherCount'} : null,
            personDays: isset($obj->{'PersonDays'}) ? (int) $obj->{'PersonDays'} : null,
            isEstimation: isset($obj->{'IsEstimation'}) ? (bool) $obj->{'IsEstimation'} : null,
            idGrantEvent: isset($obj->{'ID_GrantEvent'}) ? (int) $obj->{'ID_GrantEvent'} : null,
            isCustomDays: isset($obj->{'IsCustomDays'}) ? (bool) $obj->{'IsCustomDays'} : null,
        );
    }
}
