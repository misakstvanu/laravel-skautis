<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class RelationTypeAllOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $note = null,
        public readonly ?int $priority = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            priority: isset($obj->{'Priority'}) ? (int) $obj->{'Priority'} : null,
        );
    }
}
