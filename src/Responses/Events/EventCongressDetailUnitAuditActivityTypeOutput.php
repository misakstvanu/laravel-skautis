<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventCongressDetailUnitAuditActivityTypeOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idUnitAuditActivityType = null,
        public readonly ?string $unitAuditActivityType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnitAuditActivityType: isset($obj->{'ID_UnitAuditActivityType'}) ? (string) $obj->{'ID_UnitAuditActivityType'} : null,
            unitAuditActivityType: isset($obj->{'UnitAuditActivityType'}) ? (string) $obj->{'UnitAuditActivityType'} : null,
        );
    }
}
