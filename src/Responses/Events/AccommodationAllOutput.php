<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class AccommodationAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventCongress = null,
        public readonly ?string $displayName = null,
        public readonly ?float $fee = null,
        public readonly ?string $fullName = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventCongress: isset($obj->{'ID_EventCongress'}) ? (int) $obj->{'ID_EventCongress'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            fee: isset($obj->{'Fee'}) ? (float) $obj->{'Fee'} : null,
            fullName: isset($obj->{'FullName'}) ? (string) $obj->{'FullName'} : null,
        );
    }
}
