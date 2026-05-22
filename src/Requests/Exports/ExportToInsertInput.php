<?php

namespace Misakstvanu\LaravelSkautis\Requests\Exports;

final class ExportToInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idExport = null,
        public readonly ?string $email = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Export' => $this->idExport,
            'Email' => $this->email,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
