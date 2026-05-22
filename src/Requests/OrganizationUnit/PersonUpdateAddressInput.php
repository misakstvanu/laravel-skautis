<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonUpdateAddressInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $street = null,
        public readonly ?string $city = null,
        public readonly ?string $postcode = null,
        public readonly ?string $state = null,
        public readonly ?string $postalFirstLine = null,
        public readonly ?string $postalStreet = null,
        public readonly ?string $postalCity = null,
        public readonly ?string $postalPostcode = null,
        public readonly ?string $postalState = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'Street' => $this->street,
            'City' => $this->city,
            'Postcode' => $this->postcode,
            'State' => $this->state,
            'PostalFirstLine' => $this->postalFirstLine,
            'PostalStreet' => $this->postalStreet,
            'PostalCity' => $this->postalCity,
            'PostalPostcode' => $this->postalPostcode,
            'PostalState' => $this->postalState,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
