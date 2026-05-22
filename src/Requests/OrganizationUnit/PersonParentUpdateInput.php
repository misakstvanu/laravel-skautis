<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonParentUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idPersonParent = null,
        public readonly ?string $parent = null,
        public readonly ?string $idParentType = null,
        public readonly ?string $parentType = null,
        public readonly ?string $firstName = null,
        public readonly ?string $lastName = null,
        public readonly ?string $phone = null,
        public readonly ?string $email = null,
        public readonly ?string $note = null,
        public readonly ?string $parentNote = null,
        public readonly ?bool $parentHasAccount = null,
        public readonly ?string $parentCode = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'ID_PersonParent' => $this->idPersonParent,
            'Parent' => $this->parent,
            'ID_ParentType' => $this->idParentType,
            'ParentType' => $this->parentType,
            'FirstName' => $this->firstName,
            'LastName' => $this->lastName,
            'Phone' => $this->phone,
            'Email' => $this->email,
            'Note' => $this->note,
            'ParentNote' => $this->parentNote,
            'ParentHasAccount' => $this->parentHasAccount,
            'ParentCode' => $this->parentCode,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
