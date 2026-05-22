<?php

namespace Misakstvanu\LaravelSkautis\Responses\ApplicationManagement;

final class PackageActionAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPackage = null,
        public readonly ?string $package = null,
        public readonly ?string $idAction = null,
        public readonly ?string $action = null,
        public readonly ?string $actionName = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPackage: isset($obj->{'ID_Package'}) ? (int) $obj->{'ID_Package'} : null,
            package: isset($obj->{'Package'}) ? (string) $obj->{'Package'} : null,
            idAction: isset($obj->{'ID_Action'}) ? (string) $obj->{'ID_Action'} : null,
            action: isset($obj->{'Action'}) ? (string) $obj->{'Action'} : null,
            actionName: isset($obj->{'ActionName'}) ? (string) $obj->{'ActionName'} : null,
        );
    }
}
