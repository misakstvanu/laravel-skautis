<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class HolidayDetailNotHolidayOutput
{
    public function __construct(
        public readonly ?string $date = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            date: isset($obj->{'Date'}) ? (string) $obj->{'Date'} : null,
        );
    }
}
