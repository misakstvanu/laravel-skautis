<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class SyncContactTypeAllOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isActive = null,
        public readonly ?string $note = null,
        public readonly ?int $order = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            order: isset($obj->{'Order'}) ? (int) $obj->{'Order'} : null,
        );
    }
}
