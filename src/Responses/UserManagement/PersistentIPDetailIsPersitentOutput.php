<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class PersistentIPDetailIsPersitentOutput
{
    public function __construct(
        public readonly ?bool $isPersistent = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            isPersistent: isset($obj->{'IsPersistent'}) ? (bool) $obj->{'IsPersistent'} : null,
        );
    }
}
