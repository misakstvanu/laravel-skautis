<?php

namespace Misakstvanu\LaravelSkautis\Requests\ContentManagement;

final class ValidateAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $procedureName = null,
        public readonly ?string $idAction = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ProcedureName' => $this->procedureName,
            'ID_Action' => $this->idAction,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
