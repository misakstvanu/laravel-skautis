<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class GoogleGroupUpdateMemberPersonOutput
{
    public function __construct(
        public readonly ?string $person = null,
        public readonly ?string $email = null,
        public readonly ?bool $succes = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            succes: isset($obj->{'Succes'}) ? (bool) $obj->{'Succes'} : null,
        );
    }
}
