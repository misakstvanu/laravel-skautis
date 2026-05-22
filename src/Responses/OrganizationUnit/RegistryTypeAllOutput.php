<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class RegistryTypeAllOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idRegistryObject = null,
        public readonly ?string $registryObject = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idRegistryObject: isset($obj->{'ID_RegistryObject'}) ? (string) $obj->{'ID_RegistryObject'} : null,
            registryObject: isset($obj->{'RegistryObject'}) ? (string) $obj->{'RegistryObject'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
