<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitRegistrationAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?int $year = null,
        public readonly ?string $dateConfirmed = null,
        public readonly ?bool $isDelivered = null,
        public readonly ?bool $isAccepted = null,
        public readonly ?string $displayName = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            dateConfirmed: isset($obj->{'DateConfirmed'}) ? (string) $obj->{'DateConfirmed'} : null,
            isDelivered: isset($obj->{'IsDelivered'}) ? (bool) $obj->{'IsDelivered'} : null,
            isAccepted: isset($obj->{'IsAccepted'}) ? (bool) $obj->{'IsAccepted'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
        );
    }
}
