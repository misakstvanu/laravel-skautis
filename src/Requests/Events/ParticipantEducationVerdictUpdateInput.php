<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class ParticipantEducationVerdictUpdateInput
{
    public function __construct(
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

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            'ID_EventEducationCourse' => $this->idEventEducationCourse,
            'ID_ParticipantEducation' => $this->idParticipantEducation,
            'ID_PersonVerdictGroup' => $this->idPersonVerdictGroup,
            'PersonVerdictGroup' => $this->personVerdictGroup,
            'DateVerdictGroup' => $this->dateVerdictGroup,
            'VerdictGroup' => $this->verdictGroup,
            'ID_PersonVerdictDistrict' => $this->idPersonVerdictDistrict,
            'PersonVerdictDistrict' => $this->personVerdictDistrict,
            'DateVerdictDistrict' => $this->dateVerdictDistrict,
            'VerdictDistrict' => $this->verdictDistrict,
            'ID_PersonVerdictArea' => $this->idPersonVerdictArea,
            'PersonVerdictArea' => $this->personVerdictArea,
            'DateVerdictArea' => $this->dateVerdictArea,
            'VerdictArea' => $this->verdictArea,
            'PersonVerdictHealth' => $this->personVerdictHealth,
            'ID_DocumentVerdictHealth' => $this->idDocumentVerdictHealth,
            'DateVerdictHealth' => $this->dateVerdictHealth,
            'ID_DocumentVerdictHealthTemp' => $this->idDocumentVerdictHealthTemp,
            'ID_PersonLogin' => $this->idPersonLogin,
            'PersonLogin' => $this->personLogin,
            'ID_PersonParticipant' => $this->idPersonParticipant,
            'PersonParticipant' => $this->personParticipant,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
