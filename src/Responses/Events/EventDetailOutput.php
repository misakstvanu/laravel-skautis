<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventDetailOutput
{
    public function __construct(
        public readonly ?string $urlDetail = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            urlDetail: isset($obj->{'UrlDetail'}) ? (string) $obj->{'UrlDetail'} : null,
        );
    }
}
