<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class OccupationLanguageAllOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $shortName = null,
        public readonly ?int $order = null,
        public readonly ?string $note = null,
        public readonly ?bool $isActive = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            shortName: isset($obj->{'ShortName'}) ? (string) $obj->{'ShortName'} : null,
            order: isset($obj->{'Order'}) ? (int) $obj->{'Order'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
        );
    }
}
