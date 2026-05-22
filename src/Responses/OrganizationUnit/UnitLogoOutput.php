<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitLogoOutput
{
    public function __construct(
        public readonly ?string $logoContent = null,
        public readonly ?string $logoExtension = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            logoContent: isset($obj->{'LogoContent'}) ? (string) $obj->{'LogoContent'} : null,
            logoExtension: isset($obj->{'LogoExtension'}) ? (string) $obj->{'LogoExtension'} : null,
        );
    }
}
