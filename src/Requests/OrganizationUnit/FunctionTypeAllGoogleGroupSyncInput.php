<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class FunctionTypeAllGoogleGroupSyncInput
{
    public function __construct(
        public readonly ?int $idGoogleGroup = null,
        public readonly ?bool $isDirect = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_GoogleGroup' => $this->idGoogleGroup,
            'IsDirect' => $this->isDirect,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
