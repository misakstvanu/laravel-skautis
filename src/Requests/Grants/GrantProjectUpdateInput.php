<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantProjectUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?int $idGrant = null,
        public readonly ?string $displayName = null,
        public readonly ?string $description = null,
        public readonly ?string $from = null,
        public readonly ?string $to = null,
        public readonly ?string $idDateType = null,
        public readonly ?string $dateType = null,
        public readonly ?string $place = null,
        public readonly ?string $note = null,
        public readonly ?bool $isActive = null,
        public readonly ?bool $isGrantWide = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_User' => $this->idUser,
            'ID_Grant' => $this->idGrant,
            'DisplayName' => $this->displayName,
            'Description' => $this->description,
            'From' => $this->from,
            'To' => $this->to,
            'ID_DateType' => $this->idDateType,
            'DateType' => $this->dateType,
            'Place' => $this->place,
            'Note' => $this->note,
            'IsActive' => $this->isActive,
            'IsGrantWide' => $this->isGrantWide,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
