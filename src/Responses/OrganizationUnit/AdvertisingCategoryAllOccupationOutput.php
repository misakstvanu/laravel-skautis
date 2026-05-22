<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class AdvertisingCategoryAllOccupationOutput
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

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            ageFrom: isset($obj->{'AgeFrom'}) ? (int) $obj->{'AgeFrom'} : null,
            ageTo: isset($obj->{'AgeTo'}) ? (int) $obj->{'AgeTo'} : null,
            idSex: isset($obj->{'ID_Sex'}) ? (string) $obj->{'ID_Sex'} : null,
            sex: isset($obj->{'Sex'}) ? (string) $obj->{'Sex'} : null,
            idMeetingDate: isset($obj->{'ID_MeetingDate'}) ? (int) $obj->{'ID_MeetingDate'} : null,
            meetingDate: isset($obj->{'MeetingDate'}) ? (string) $obj->{'MeetingDate'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
