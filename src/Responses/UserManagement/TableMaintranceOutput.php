<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class TableMaintranceOutput
{
    public function __construct(
        public readonly ?string $message = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            message: isset($obj->{'Message'}) ? (string) $obj->{'Message'} : null,
        );
    }
}
