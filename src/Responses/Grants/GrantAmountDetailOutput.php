<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantAmountDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idGrant = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?string $eventEducationType = null,
        public readonly ?float $amount = null,
        public readonly ?string $note = null,
        public readonly ?int $year = null,
        public readonly ?float $maximumCostsRatio = null,
        public readonly ?string $grantConditions = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idGrant: isset($obj->{'ID_Grant'}) ? (int) $obj->{'ID_Grant'} : null,
            idEventEducationType: isset($obj->{'ID_EventEducationType'}) ? (int) $obj->{'ID_EventEducationType'} : null,
            eventEducationType: isset($obj->{'EventEducationType'}) ? (string) $obj->{'EventEducationType'} : null,
            amount: isset($obj->{'Amount'}) ? (float) $obj->{'Amount'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            maximumCostsRatio: isset($obj->{'MaximumCostsRatio'}) ? (float) $obj->{'MaximumCostsRatio'} : null,
            grantConditions: isset($obj->{'GrantConditions'}) ? (string) $obj->{'GrantConditions'} : null,
        );
    }
}
