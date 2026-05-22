<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class MembershipCategoryAllOutput
{
    public function __construct(
        public readonly ?int $minAge = null,
        public readonly ?int $maxAge = null,
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idSex = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            minAge: isset($obj->{'MinAge'}) ? (int) $obj->{'MinAge'} : null,
            maxAge: isset($obj->{'MaxAge'}) ? (int) $obj->{'MaxAge'} : null,
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idSex: isset($obj->{'ID_Sex'}) ? (string) $obj->{'ID_Sex'} : null,
        );
    }
}
