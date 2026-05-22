<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class OccupationRentDetailCalendarOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idDocumentCalendar = null,
        public readonly ?int $idDocumentCalendarAdmin = null,
        public readonly ?string $calendarRefreshDate = null,
        public readonly ?string $storageCalendar = null,
        public readonly ?string $storageCalendarAdmin = null,
        public readonly ?string $storagePath = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idDocumentCalendar: isset($obj->{'ID_DocumentCalendar'}) ? (int) $obj->{'ID_DocumentCalendar'} : null,
            idDocumentCalendarAdmin: isset($obj->{'ID_DocumentCalendarAdmin'}) ? (int) $obj->{'ID_DocumentCalendarAdmin'} : null,
            calendarRefreshDate: isset($obj->{'CalendarRefreshDate'}) ? (string) $obj->{'CalendarRefreshDate'} : null,
            storageCalendar: isset($obj->{'StorageCalendar'}) ? (string) $obj->{'StorageCalendar'} : null,
            storageCalendarAdmin: isset($obj->{'StorageCalendarAdmin'}) ? (string) $obj->{'StorageCalendarAdmin'} : null,
            storagePath: isset($obj->{'StoragePath'}) ? (string) $obj->{'StoragePath'} : null,
        );
    }
}
