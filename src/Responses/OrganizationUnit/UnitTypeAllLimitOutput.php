<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitTypeAllLimitOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $callLimit = null,
        public readonly ?int $dataLimit = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            callLimit: isset($obj->{'CallLimit'}) ? (int) $obj->{'CallLimit'} : null,
            dataLimit: isset($obj->{'DataLimit'}) ? (int) $obj->{'DataLimit'} : null,
        );
    }
}
