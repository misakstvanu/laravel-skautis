<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonChangeOtherVerifyOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $isValid = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            isValid: isset($obj->{'IsValid'}) ? (bool) $obj->{'IsValid'} : null,
        );
    }
}
