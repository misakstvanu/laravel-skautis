<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class DegreeTypeAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isInFrontOf = null,
        public readonly ?int $order = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            isInFrontOf: isset($obj->{'IsInFrontOf'}) ? (bool) $obj->{'IsInFrontOf'} : null,
            order: isset($obj->{'Order'}) ? (int) $obj->{'Order'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
