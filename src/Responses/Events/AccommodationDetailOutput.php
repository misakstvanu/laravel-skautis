<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class AccommodationDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idEventCongress = null,
        public readonly ?string $displayName = null,
        public readonly ?float $fee = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventCongress: isset($obj->{'ID_EventCongress'}) ? (int) $obj->{'ID_EventCongress'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            fee: isset($obj->{'Fee'}) ? (float) $obj->{'Fee'} : null,
        );
    }
}
