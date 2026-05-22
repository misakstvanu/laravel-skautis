<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class InvoiceGroupAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idTelephonyUnit = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_TelephonyUnit' => $this->idTelephonyUnit,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
