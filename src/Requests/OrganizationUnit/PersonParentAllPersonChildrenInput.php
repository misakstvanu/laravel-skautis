<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonParentAllPersonChildrenInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $id = null,
        public readonly ?int $idPersonParent = null,
        public readonly ?string $idParentType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID_Person' => $this->idPerson,
            'ID' => $this->id,
            'ID_PersonParent' => $this->idPersonParent,
            'ID_ParentType' => $this->idParentType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
