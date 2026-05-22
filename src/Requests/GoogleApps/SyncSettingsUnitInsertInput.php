<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class SyncSettingsUnitInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGoogleGroupSyncSettings = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $string = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_GoogleGroupSyncSettings' => $this->idGoogleGroupSyncSettings,
            'ID_Unit' => $this->idUnit,
            'string' => $this->string,
            'Unit' => $this->unit,
            'RegistrationNumber' => $this->registrationNumber,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
