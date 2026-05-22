<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class DomainAdminInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idDomain = null,
        public readonly ?string $domain = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Domain' => $this->idDomain,
            'Domain' => $this->domain,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
