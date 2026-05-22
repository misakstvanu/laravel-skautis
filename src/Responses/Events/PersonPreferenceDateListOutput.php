<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class PersonPreferenceDateListOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $date = null,
        public readonly ?bool $enterTime = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            date: isset($obj->{'Date'}) ? (string) $obj->{'Date'} : null,
            enterTime: isset($obj->{'EnterTime'}) ? (bool) $obj->{'EnterTime'} : null,
        );
    }
}
