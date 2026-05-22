<?php

namespace Misakstvanu\LaravelSkautis\Responses\ApplicationManagement;

final class PackageApplicationAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPackage = null,
        public readonly ?string $package = null,
        public readonly ?string $idApplication = null,
        public readonly ?string $application = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPackage: isset($obj->{'ID_Package'}) ? (int) $obj->{'ID_Package'} : null,
            package: isset($obj->{'Package'}) ? (string) $obj->{'Package'} : null,
            idApplication: isset($obj->{'ID_Application'}) ? (string) $obj->{'ID_Application'} : null,
            application: isset($obj->{'Application'}) ? (string) $obj->{'Application'} : null,
        );
    }
}
