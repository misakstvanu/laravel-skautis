<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonAllExternalInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?string $displayName = null,
        public readonly ?int $top = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            'ID_User' => $this->idUser,
            'DisplayName' => $this->displayName,
            'Top' => $this->top,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
