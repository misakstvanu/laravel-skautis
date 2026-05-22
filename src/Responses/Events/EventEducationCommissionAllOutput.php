<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationCommissionAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventEducationExam = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?bool $isLeader = null,
        public readonly ?string $eventEducationCommissionQualification = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventEducationExam: isset($obj->{'ID_EventEducationExam'}) ? (int) $obj->{'ID_EventEducationExam'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            isLeader: isset($obj->{'IsLeader'}) ? (bool) $obj->{'IsLeader'} : null,
            eventEducationCommissionQualification: isset($obj->{'EventEducationCommissionQualification'}) ? (string) $obj->{'EventEducationCommissionQualification'} : null,
        );
    }
}
