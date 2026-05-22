<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitAllRegistryBasicOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $location = null,
        public readonly ?string $iC = null,
        public readonly ?string $dateFrom = null,
        public readonly ?string $dateTo = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            location: isset($obj->{'Location'}) ? (string) $obj->{'Location'} : null,
            iC: isset($obj->{'IC'}) ? (string) $obj->{'IC'} : null,
            dateFrom: isset($obj->{'DateFrom'}) ? (string) $obj->{'DateFrom'} : null,
            dateTo: isset($obj->{'DateTo'}) ? (string) $obj->{'DateTo'} : null,
        );
    }
}
