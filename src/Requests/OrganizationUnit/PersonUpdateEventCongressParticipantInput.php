<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonUpdateEventCongressParticipantInput
{
    public function __construct(
        public readonly ?int $idParticipant = null,
        public readonly ?string $email = null,
        public readonly ?string $phone = null,
        public readonly ?string $street = null,
        public readonly ?string $city = null,
        public readonly ?string $postcode = null,
        public readonly ?string $state = null,
        public readonly ?string $idCardNumber = null,
        public readonly ?string $idCardValidTo = null,
        public readonly ?bool $isAddressAuthenticated = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Participant' => $this->idParticipant,
            'Email' => $this->email,
            'Phone' => $this->phone,
            'Street' => $this->street,
            'City' => $this->city,
            'Postcode' => $this->postcode,
            'State' => $this->state,
            'IdCardNumber' => $this->idCardNumber,
            'IdCardValidTo' => $this->idCardValidTo,
            'IsAddressAuthenticated' => $this->isAddressAuthenticated,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
