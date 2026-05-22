<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class AdvertisingCategoryAllInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $idMeetingDate = null,
        public readonly ?string $idSex = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID_Unit' => $this->idUnit,
            'ID_MeetingDate' => $this->idMeetingDate,
            'ID_Sex' => $this->idSex,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
