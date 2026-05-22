<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class StatementErrorsOutput
{
    public function __construct(
        public readonly ?string $displayName = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
        );
    }
}
