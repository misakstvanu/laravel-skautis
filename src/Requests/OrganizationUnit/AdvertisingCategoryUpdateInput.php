<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class AdvertisingCategoryUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?int $ageFrom = null,
        public readonly ?int $ageTo = null,
        public readonly ?string $idSex = null,
        public readonly ?string $sex = null,
        public readonly ?int $idMeetingDate = null,
        public readonly ?string $meetingDate = null,
        public readonly ?string $note = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'AgeFrom' => $this->ageFrom,
            'AgeTo' => $this->ageTo,
            'ID_Sex' => $this->idSex,
            'Sex' => $this->sex,
            'ID_MeetingDate' => $this->idMeetingDate,
            'MeetingDate' => $this->meetingDate,
            'Note' => $this->note,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
