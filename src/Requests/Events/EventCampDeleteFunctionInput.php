<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCampDeleteFunctionInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEvent = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?string $event = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idEventFunctionType = null,
        public readonly ?string $eventFunctionType = null,
        public readonly ?bool $healthQualification = null,
        public readonly ?string $healthQualificationDate = null,
        public readonly ?string $note = null,
        public readonly ?int $idEventFunction = null,
        public readonly ?string $eventFunctionTypeKey = null,
        public readonly ?int $idEventCamp = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Event' => $this->idEvent,
            'ID_EventEducation' => $this->idEventEducation,
            'Event' => $this->event,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'ID_EventFunctionType' => $this->idEventFunctionType,
            'EventFunctionType' => $this->eventFunctionType,
            'HealthQualification' => $this->healthQualification,
            'HealthQualificationDate' => $this->healthQualificationDate,
            'Note' => $this->note,
            'ID_EventFunction' => $this->idEventFunction,
            'EventFunctionTypeKey' => $this->eventFunctionTypeKey,
            'ID_EventCamp' => $this->idEventCamp,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
