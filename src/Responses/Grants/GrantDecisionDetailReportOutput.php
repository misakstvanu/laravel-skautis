<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantDecisionDetailReportOutput
{
    public function __construct(
        public readonly ?string $person = null,
        public readonly ?string $mayor = null,
        public readonly ?string $date = null,
        public readonly ?string $bodyHTML = null,
        public readonly ?string $bodyRTF = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            mayor: isset($obj->{'Mayor'}) ? (string) $obj->{'Mayor'} : null,
            date: isset($obj->{'Date'}) ? (string) $obj->{'Date'} : null,
            bodyHTML: isset($obj->{'BodyHTML'}) ? (string) $obj->{'BodyHTML'} : null,
            bodyRTF: isset($obj->{'BodyRTF'}) ? (string) $obj->{'BodyRTF'} : null,
        );
    }
}
