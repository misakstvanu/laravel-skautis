<?php

namespace Misakstvanu\LaravelSkautis\Responses\Material;

final class WarehouseAdminAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEvent = null,
        public readonly ?string $event = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEvent: isset($obj->{'ID_Event'}) ? (int) $obj->{'ID_Event'} : null,
            event: isset($obj->{'Event'}) ? (string) $obj->{'Event'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
