<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonAllGlobalSearchOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $hasAccount = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            hasAccount: isset($obj->{'HasAccount'}) ? (bool) $obj->{'HasAccount'} : null,
        );
    }
}
