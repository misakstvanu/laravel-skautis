<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonOtherUpdateUnitEnrollInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $unitEnrollExtension = null,
        public readonly ?string $idUnitEnrollTempFile = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'UnitEnrollExtension' => $this->unitEnrollExtension,
            'ID_UnitEnrollTempFile' => $this->idUnitEnrollTempFile,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
