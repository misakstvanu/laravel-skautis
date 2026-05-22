<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class ParticipantEducationVerdictDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $idEventEducationCourse = null,
        public readonly ?int $idParticipantEducation = null,
        public readonly ?int $idPersonVerdictGroup = null,
        public readonly ?string $personVerdictGroup = null,
        public readonly ?string $dateVerdictGroup = null,
        public readonly ?string $verdictGroup = null,
        public readonly ?int $idPersonVerdictDistrict = null,
        public readonly ?string $personVerdictDistrict = null,
        public readonly ?string $dateVerdictDistrict = null,
        public readonly ?string $verdictDistrict = null,
        public readonly ?int $idPersonVerdictArea = null,
        public readonly ?string $personVerdictArea = null,
        public readonly ?string $dateVerdictArea = null,
        public readonly ?string $verdictArea = null,
        public readonly ?string $personVerdictHealth = null,
        public readonly ?int $idDocumentVerdictHealth = null,
        public readonly ?string $dateVerdictHealth = null,
        public readonly ?string $idDocumentVerdictHealthTemp = null,
        public readonly ?int $idPersonLogin = null,
        public readonly ?string $personLogin = null,
        public readonly ?int $idPersonParticipant = null,
        public readonly ?string $personParticipant = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            idEventEducationCourse: isset($obj->{'ID_EventEducationCourse'}) ? (int) $obj->{'ID_EventEducationCourse'} : null,
            idParticipantEducation: isset($obj->{'ID_ParticipantEducation'}) ? (int) $obj->{'ID_ParticipantEducation'} : null,
            idPersonVerdictGroup: isset($obj->{'ID_PersonVerdictGroup'}) ? (int) $obj->{'ID_PersonVerdictGroup'} : null,
            personVerdictGroup: isset($obj->{'PersonVerdictGroup'}) ? (string) $obj->{'PersonVerdictGroup'} : null,
            dateVerdictGroup: isset($obj->{'DateVerdictGroup'}) ? (string) $obj->{'DateVerdictGroup'} : null,
            verdictGroup: isset($obj->{'VerdictGroup'}) ? (string) $obj->{'VerdictGroup'} : null,
            idPersonVerdictDistrict: isset($obj->{'ID_PersonVerdictDistrict'}) ? (int) $obj->{'ID_PersonVerdictDistrict'} : null,
            personVerdictDistrict: isset($obj->{'PersonVerdictDistrict'}) ? (string) $obj->{'PersonVerdictDistrict'} : null,
            dateVerdictDistrict: isset($obj->{'DateVerdictDistrict'}) ? (string) $obj->{'DateVerdictDistrict'} : null,
            verdictDistrict: isset($obj->{'VerdictDistrict'}) ? (string) $obj->{'VerdictDistrict'} : null,
            idPersonVerdictArea: isset($obj->{'ID_PersonVerdictArea'}) ? (int) $obj->{'ID_PersonVerdictArea'} : null,
            personVerdictArea: isset($obj->{'PersonVerdictArea'}) ? (string) $obj->{'PersonVerdictArea'} : null,
            dateVerdictArea: isset($obj->{'DateVerdictArea'}) ? (string) $obj->{'DateVerdictArea'} : null,
            verdictArea: isset($obj->{'VerdictArea'}) ? (string) $obj->{'VerdictArea'} : null,
            personVerdictHealth: isset($obj->{'PersonVerdictHealth'}) ? (string) $obj->{'PersonVerdictHealth'} : null,
            idDocumentVerdictHealth: isset($obj->{'ID_DocumentVerdictHealth'}) ? (int) $obj->{'ID_DocumentVerdictHealth'} : null,
            dateVerdictHealth: isset($obj->{'DateVerdictHealth'}) ? (string) $obj->{'DateVerdictHealth'} : null,
            idDocumentVerdictHealthTemp: isset($obj->{'ID_DocumentVerdictHealthTemp'}) ? (string) $obj->{'ID_DocumentVerdictHealthTemp'} : null,
            idPersonLogin: isset($obj->{'ID_PersonLogin'}) ? (int) $obj->{'ID_PersonLogin'} : null,
            personLogin: isset($obj->{'PersonLogin'}) ? (string) $obj->{'PersonLogin'} : null,
            idPersonParticipant: isset($obj->{'ID_PersonParticipant'}) ? (int) $obj->{'ID_PersonParticipant'} : null,
            personParticipant: isset($obj->{'PersonParticipant'}) ? (string) $obj->{'PersonParticipant'} : null,
        );
    }
}
