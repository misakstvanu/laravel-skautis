<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class DistrictAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $isActive = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idRegion = null,
        public readonly ?string $region = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idRegion: isset($obj->{'ID_Region'}) ? (int) $obj->{'ID_Region'} : null,
            region: isset($obj->{'Region'}) ? (string) $obj->{'Region'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
