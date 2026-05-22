<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class ParticipantEducationVerdictUpdateNotifyInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $idEventEducationCourse = null,
        public readonly ?int $idParticipantEducation = null,
        public readonly ?bool $isReminderDistrict = null,
        public readonly ?bool $isReminderGroup = null,
        public readonly ?bool $isReminderArea = null,
        public readonly ?bool $isReminderHealth = null,
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
            'IsReminderDistrict' => $this->isReminderDistrict,
            'IsReminderGroup' => $this->isReminderGroup,
            'IsReminderArea' => $this->isReminderArea,
            'IsReminderHealth' => $this->isReminderHealth,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
