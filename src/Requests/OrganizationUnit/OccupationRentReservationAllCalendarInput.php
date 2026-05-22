<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class OccupationRentReservationAllCalendarInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $id = null,
        public readonly ?bool $showAdminView = null,
        public readonly ?string $calendarName = null,
        public readonly ?string $calendarDescription = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            'ShowAdminView' => $this->showAdminView,
            'CalendarName' => $this->calendarName,
            'CalendarDescription' => $this->calendarDescription,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
