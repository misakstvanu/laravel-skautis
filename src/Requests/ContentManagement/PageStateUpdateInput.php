<?php

namespace Misakstvanu\LaravelSkautis\Requests\ContentManagement;

final class PageStateUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?int $idKnown = null,
        public readonly ?int $idPage = null,
        public readonly ?string $page = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isDefault = null,
        public readonly mixed $data = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_User' => $this->idUser,
            'ID_Known' => $this->idKnown,
            'ID_Page' => $this->idPage,
            'Page' => $this->page,
            'DisplayName' => $this->displayName,
            'IsDefault' => $this->isDefault,
            'Data' => $this->data,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
