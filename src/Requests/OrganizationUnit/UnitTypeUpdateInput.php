<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitTypeUpdateInput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $level = null,
        public readonly ?bool $containsMembers = null,
        public readonly ?int $freeAttachments = null,
        public readonly ?string $note = null,
        public readonly ?string $birdos = null,
        public readonly ?int $commissionCount = null,
        public readonly ?int $commissionDeadline = null,
        public readonly ?string $idInstance = null,
        public readonly ?int $callLimit = null,
        public readonly ?int $dataLimit = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'Level' => $this->level,
            'ContainsMembers' => $this->containsMembers,
            'FreeAttachments' => $this->freeAttachments,
            'Note' => $this->note,
            'Birdos' => $this->birdos,
            'CommissionCount' => $this->commissionCount,
            'CommissionDeadline' => $this->commissionDeadline,
            'ID_Instance' => $this->idInstance,
            'CallLimit' => $this->callLimit,
            'DataLimit' => $this->dataLimit,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
