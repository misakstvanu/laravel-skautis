<?php

namespace Misakstvanu\LaravelSkautis\Requests\ApplicationManagement;

final class ApplicationOperationInsertInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $idOperation = null,
        public readonly ?string $idAction = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID_Operation' => $this->idOperation,
            'ID_Action' => $this->idAction,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
