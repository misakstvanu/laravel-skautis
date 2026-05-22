<?php

namespace Misakstvanu\LaravelSkautis\Responses\ApplicationManagement;

final class PackageOperationAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPackage = null,
        public readonly ?string $package = null,
        public readonly ?string $idOperation = null,
        public readonly ?string $operation = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPackage: isset($obj->{'ID_Package'}) ? (int) $obj->{'ID_Package'} : null,
            package: isset($obj->{'Package'}) ? (string) $obj->{'Package'} : null,
            idOperation: isset($obj->{'ID_Operation'}) ? (string) $obj->{'ID_Operation'} : null,
            operation: isset($obj->{'Operation'}) ? (string) $obj->{'Operation'} : null,
        );
    }
}
