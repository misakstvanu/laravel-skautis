<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class TempFileMaintranceOutput
{
    public function __construct(
        public readonly ?string $databaseMessage = null,
        public readonly ?string $storageMessage = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            databaseMessage: isset($obj->{'DatabaseMessage'}) ? (string) $obj->{'DatabaseMessage'} : null,
            storageMessage: isset($obj->{'StorageMessage'}) ? (string) $obj->{'StorageMessage'} : null,
        );
    }
}
