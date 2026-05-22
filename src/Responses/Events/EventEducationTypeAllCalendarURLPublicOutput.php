<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationTypeAllCalendarURLPublicOutput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?string $url = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            url: isset($obj->{'Url'}) ? (string) $obj->{'Url'} : null,
        );
    }
}
