<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class UserLoginCodeOtherVerifyOutput
{
    public function __construct(
        public readonly ?bool $isValid = null,
        public readonly ?string $validTo = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            isValid: isset($obj->{'IsValid'}) ? (bool) $obj->{'IsValid'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
        );
    }
}
