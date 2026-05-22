<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class SyncSettingsEmailInsertPersonOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $person = null,
        public readonly ?string $email = null,
        public readonly ?bool $success = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            success: isset($obj->{'Success'}) ? (bool) $obj->{'Success'} : null,
        );
    }
}
