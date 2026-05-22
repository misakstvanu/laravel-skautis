<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonAllCatalogInput
{
    public function __construct(
        public readonly ?string $name = null,
        public readonly ?string $city = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?bool $registrationNumberStartWith = null,
        public readonly ?string $unit = null,
        public readonly ?string $phone = null,
        public readonly ?string $email = null,
        public readonly ?int $idOfferType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Name' => $this->name,
            'City' => $this->city,
            'RegistrationNumber' => $this->registrationNumber,
            'RegistrationNumberStartWith' => $this->registrationNumberStartWith,
            'Unit' => $this->unit,
            'Phone' => $this->phone,
            'Email' => $this->email,
            'ID_OfferType' => $this->idOfferType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
