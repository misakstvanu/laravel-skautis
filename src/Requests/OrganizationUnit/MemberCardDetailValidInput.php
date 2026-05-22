<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class MemberCardDetailValidInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $bitOutput = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'DisplayName' => $this->displayName,
            'BitOutput' => $this->bitOutput,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
