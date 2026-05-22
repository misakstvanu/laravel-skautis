<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventCampEnrollAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventCamp = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $code = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?int $idEventCampInvitation = null,
        public readonly ?string $idCampEnrollState = null,
        public readonly ?string $campEnrollState = null,
        public readonly ?string $iconClass = null,
        public readonly ?string $icon = null,
        public readonly ?string $variableSymbol = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventCamp: isset($obj->{'ID_EventCamp'}) ? (int) $obj->{'ID_EventCamp'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            code: isset($obj->{'Code'}) ? (string) $obj->{'Code'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            idEventCampInvitation: isset($obj->{'ID_EventCampInvitation'}) ? (int) $obj->{'ID_EventCampInvitation'} : null,
            idCampEnrollState: isset($obj->{'ID_CampEnrollState'}) ? (string) $obj->{'ID_CampEnrollState'} : null,
            campEnrollState: isset($obj->{'CampEnrollState'}) ? (string) $obj->{'CampEnrollState'} : null,
            iconClass: isset($obj->{'IconClass'}) ? (string) $obj->{'IconClass'} : null,
            icon: isset($obj->{'Icon'}) ? (string) $obj->{'Icon'} : null,
            variableSymbol: isset($obj->{'VariableSymbol'}) ? (string) $obj->{'VariableSymbol'} : null,
        );
    }
}
