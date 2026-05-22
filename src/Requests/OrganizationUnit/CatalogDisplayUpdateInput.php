<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class CatalogDisplayUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?bool $birthday = null,
        public readonly ?bool $yearFrom = null,
        public readonly ?bool $adress = null,
        public readonly ?bool $postalAdress = null,
        public readonly ?bool $school = null,
        public readonly ?bool $function_ = null,
        public readonly ?bool $qualification = null,
        public readonly ?bool $educationSeminary = null,
        public readonly ?bool $offer = null,
        public readonly ?bool $education = null,
        public readonly ?bool $membership = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'Birthday' => $this->birthday,
            'YearFrom' => $this->yearFrom,
            'Adress' => $this->adress,
            'PostalAdress' => $this->postalAdress,
            'School' => $this->school,
            'Function' => $this->function_,
            'Qualification' => $this->qualification,
            'EducationSeminary' => $this->educationSeminary,
            'Offer' => $this->offer,
            'Education' => $this->education,
            'Membership' => $this->membership,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
