<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantBudgetAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGrant = null,
        public readonly ?string $idGrantBudgetType = null,
        public readonly ?string $grantBudgetType = null,
        public readonly ?float $real = null,
        public readonly ?float $budgeted = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idGrant: isset($obj->{'ID_Grant'}) ? (int) $obj->{'ID_Grant'} : null,
            idGrantBudgetType: isset($obj->{'ID_GrantBudgetType'}) ? (string) $obj->{'ID_GrantBudgetType'} : null,
            grantBudgetType: isset($obj->{'GrantBudgetType'}) ? (string) $obj->{'GrantBudgetType'} : null,
            real: isset($obj->{'Real'}) ? (float) $obj->{'Real'} : null,
            budgeted: isset($obj->{'Budgeted'}) ? (float) $obj->{'Budgeted'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}

