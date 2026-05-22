<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class AdvertisingCategoryAllOccupationInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $idOccupation = null,
        public readonly ?int $idMeetingDate = null,
        public readonly ?string $idSex = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID_Occupation' => $this->idOccupation,
            'ID_MeetingDate' => $this->idMeetingDate,
            'ID_Sex' => $this->idSex,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
