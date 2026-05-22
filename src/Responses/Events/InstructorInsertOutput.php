<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class InstructorInsertOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $mistake = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            mistake: isset($obj->{'Mistake'}) ? (string) $obj->{'Mistake'} : null,
        );
    }
}
