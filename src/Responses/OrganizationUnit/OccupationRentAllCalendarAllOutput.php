<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class OccupationRentAllCalendarAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idDocumentCalendar = null,
        public readonly ?int $idDocumentCalendarAdmin = null,
        public readonly ?string $calendarRefreshDate = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idDocumentCalendar: isset($obj->{'ID_DocumentCalendar'}) ? (int) $obj->{'ID_DocumentCalendar'} : null,
            idDocumentCalendarAdmin: isset($obj->{'ID_DocumentCalendarAdmin'}) ? (int) $obj->{'ID_DocumentCalendarAdmin'} : null,
            calendarRefreshDate: isset($obj->{'CalendarRefreshDate'}) ? (string) $obj->{'CalendarRefreshDate'} : null,
        );
    }
}
