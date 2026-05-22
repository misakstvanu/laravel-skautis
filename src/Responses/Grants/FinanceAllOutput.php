<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class FinanceAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGrant = null,
        public readonly ?string $idFinanceType = null,
        public readonly ?string $financeType = null,
        public readonly ?string $financeTypeCustom = null,
        public readonly ?string $financeTypeDisplay = null,
        public readonly ?float $amount = null,
        public readonly ?float $amountReal = null,
        public readonly ?bool $canEdit = null,
        public readonly ?bool $canDelete = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idGrant: isset($obj->{'ID_Grant'}) ? (int) $obj->{'ID_Grant'} : null,
            idFinanceType: isset($obj->{'ID_FinanceType'}) ? (string) $obj->{'ID_FinanceType'} : null,
            financeType: isset($obj->{'FinanceType'}) ? (string) $obj->{'FinanceType'} : null,
            financeTypeCustom: isset($obj->{'FinanceTypeCustom'}) ? (string) $obj->{'FinanceTypeCustom'} : null,
            financeTypeDisplay: isset($obj->{'FinanceTypeDisplay'}) ? (string) $obj->{'FinanceTypeDisplay'} : null,
            amount: isset($obj->{'Amount'}) ? (float) $obj->{'Amount'} : null,
            amountReal: isset($obj->{'AmountReal'}) ? (float) $obj->{'AmountReal'} : null,
            canEdit: isset($obj->{'CanEdit'}) ? (bool) $obj->{'CanEdit'} : null,
            canDelete: isset($obj->{'CanDelete'}) ? (bool) $obj->{'CanDelete'} : null,
        );
    }
}
