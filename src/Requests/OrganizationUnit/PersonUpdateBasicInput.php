<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonUpdateBasicInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idSex = null,
        public readonly ?string $birthday = null,
        public readonly ?string $firstName = null,
        public readonly ?string $lastName = null,
        public readonly ?string $nickName = null,
        public readonly ?string $maidenName = null,
        public readonly ?int $yearFrom = null,
        public readonly ?string $street = null,
        public readonly ?string $city = null,
        public readonly ?string $postcode = null,
        public readonly ?string $state = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Sex' => $this->idSex,
            'Birthday' => $this->birthday,
            'FirstName' => $this->firstName,
            'LastName' => $this->lastName,
            'NickName' => $this->nickName,
            'MaidenName' => $this->maidenName,
            'YearFrom' => $this->yearFrom,
            'Street' => $this->street,
            'City' => $this->city,
            'Postcode' => $this->postcode,
            'State' => $this->state,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
