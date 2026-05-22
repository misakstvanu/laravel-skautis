<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonDetailGoogleAccountOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $email = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
        );
    }
}
