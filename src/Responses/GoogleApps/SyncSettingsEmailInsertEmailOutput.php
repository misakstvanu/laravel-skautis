<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class SyncSettingsEmailInsertEmailOutput
{
    public function __construct(
        public readonly ?string $string = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            string: isset($obj->{'string'}) ? (string) $obj->{'string'} : null,
        );
    }
}
