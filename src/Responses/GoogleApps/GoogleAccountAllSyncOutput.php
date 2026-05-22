<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class GoogleAccountAllSyncOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $unitEmail = null,
        public readonly ?string $personEmail = null,
        public readonly ?string $oldGroup = null,
        public readonly ?string $newGroup = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            unitEmail: isset($obj->{'UnitEmail'}) ? (string) $obj->{'UnitEmail'} : null,
            personEmail: isset($obj->{'PersonEmail'}) ? (string) $obj->{'PersonEmail'} : null,
            oldGroup: isset($obj->{'OldGroup'}) ? (string) $obj->{'OldGroup'} : null,
            newGroup: isset($obj->{'NewGroup'}) ? (string) $obj->{'NewGroup'} : null,
        );
    }
}
