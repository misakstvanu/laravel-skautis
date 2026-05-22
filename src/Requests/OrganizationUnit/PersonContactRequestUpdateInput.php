<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonContactRequestUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPersonContact = null,
        public readonly ?string $idContactRequestType = null,
        public readonly ?string $contactRequestType = null,
        public readonly ?string $validTo = null,
        public readonly ?string $created = null,
        public readonly ?int $idUser = null,
        public readonly ?string $completed = null,
        public readonly ?string $code = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $idContactType = null,
        public readonly ?string $contactType = null,
        public readonly ?string $value = null,
        public readonly ?bool $isCatalog = null,
        public readonly ?bool $isGa = null,
        public readonly ?string $note = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_PersonContact' => $this->idPersonContact,
            'ID_ContactRequestType' => $this->idContactRequestType,
            'ContactRequestType' => $this->contactRequestType,
            'ValidTo' => $this->validTo,
            'Created' => $this->created,
            'ID_User' => $this->idUser,
            'Completed' => $this->completed,
            'Code' => $this->code,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'ID_ContactType' => $this->idContactType,
            'ContactType' => $this->contactType,
            'Value' => $this->value,
            'IsCatalog' => $this->isCatalog,
            'IsGa' => $this->isGa,
            'Note' => $this->note,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
