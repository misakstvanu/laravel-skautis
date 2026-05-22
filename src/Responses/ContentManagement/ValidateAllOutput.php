<?php

namespace Misakstvanu\LaravelSkautis\Responses\ContentManagement;

final class ValidateAllOutput
{
    public function __construct(
        public readonly ?string $property = null,
        public readonly ?string $displayName = null,
        public readonly ?string $args = null,
        public readonly ?string $severity = null,
        public readonly ?string $message = null,
        public readonly ?string $advice = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            property: isset($obj->{'Property'}) ? (string) $obj->{'Property'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            args: isset($obj->{'Args'}) ? (string) $obj->{'Args'} : null,
            severity: isset($obj->{'Severity'}) ? (string) $obj->{'Severity'} : null,
            message: isset($obj->{'Message'}) ? (string) $obj->{'Message'} : null,
            advice: isset($obj->{'Advice'}) ? (string) $obj->{'Advice'} : null,
        );
    }
}
