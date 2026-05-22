<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class GoogleGroupSyncSettingsUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGoogleGroup = null,
        public readonly ?string $googleGroup = null,
        public readonly ?string $idSyncLevelType = null,
        public readonly ?string $syncLevelType = null,
        public readonly ?bool $isFunction = null,
        public readonly ?int $int = null,
        public readonly ?string $string = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $idUnitType = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_GoogleGroup' => $this->idGoogleGroup,
            'GoogleGroup' => $this->googleGroup,
            'ID_SyncLevelType' => $this->idSyncLevelType,
            'SyncLevelType' => $this->syncLevelType,
            'IsFunction' => $this->isFunction,
            'int' => $this->int,
            'string' => $this->string,
            'ID_Unit' => $this->idUnit,
            'ID_UnitType' => $this->idUnitType,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
