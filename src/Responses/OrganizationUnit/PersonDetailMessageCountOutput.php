<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonDetailMessageCountOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $totalWebMessage = null,
        public readonly ?int $totalWebMessageUnreaded = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            totalWebMessage: isset($obj->{'TotalWebMessage'}) ? (int) $obj->{'TotalWebMessage'} : null,
            totalWebMessageUnreaded: isset($obj->{'TotalWebMessageUnreaded'}) ? (int) $obj->{'TotalWebMessageUnreaded'} : null,
        );
    }
}
