<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonRegistrationServiceAllSummaryOutput
{
    public function __construct(
        public readonly ?int $idRegistrationService = null,
        public readonly ?string $registrationServiceType = null,
        public readonly ?float $amount = null,
        public readonly ?int $personCount = null,
        public readonly ?int $serviceCount = null,
        public readonly ?float $amountSum = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idRegistrationService: isset($obj->{'ID_RegistrationService'}) ? (int) $obj->{'ID_RegistrationService'} : null,
            registrationServiceType: isset($obj->{'RegistrationServiceType'}) ? (string) $obj->{'RegistrationServiceType'} : null,
            amount: isset($obj->{'Amount'}) ? (float) $obj->{'Amount'} : null,
            personCount: isset($obj->{'PersonCount'}) ? (int) $obj->{'PersonCount'} : null,
            serviceCount: isset($obj->{'ServiceCount'}) ? (int) $obj->{'ServiceCount'} : null,
            amountSum: isset($obj->{'AmountSum'}) ? (float) $obj->{'AmountSum'} : null,
        );
    }
}
