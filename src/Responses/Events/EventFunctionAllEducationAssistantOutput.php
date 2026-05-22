<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventFunctionAllEducationAssistantOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEvent = null,
        public readonly ?string $event = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $identificationCode = null,
        public readonly ?int $idEventFunctionType = null,
        public readonly ?string $eventFunctionType = null,
        public readonly ?string $eventFunctionTypeKey = null,
        public readonly ?string $note = null,
        public readonly ?string $email = null,
        public readonly ?string $phone = null,
        public readonly ?int $age = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEvent: isset($obj->{'ID_Event'}) ? (int) $obj->{'ID_Event'} : null,
            event: isset($obj->{'Event'}) ? (string) $obj->{'Event'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            identificationCode: isset($obj->{'IdentificationCode'}) ? (string) $obj->{'IdentificationCode'} : null,
            idEventFunctionType: isset($obj->{'ID_EventFunctionType'}) ? (int) $obj->{'ID_EventFunctionType'} : null,
            eventFunctionType: isset($obj->{'EventFunctionType'}) ? (string) $obj->{'EventFunctionType'} : null,
            eventFunctionTypeKey: isset($obj->{'EventFunctionTypeKey'}) ? (string) $obj->{'EventFunctionTypeKey'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            phone: isset($obj->{'Phone'}) ? (string) $obj->{'Phone'} : null,
            age: isset($obj->{'Age'}) ? (int) $obj->{'Age'} : null,
        );
    }
}
