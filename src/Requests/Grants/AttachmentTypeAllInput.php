<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class AttachmentTypeAllInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idGrantType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_GrantType' => $this->idGrantType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
