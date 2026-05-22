<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class SyncSettingsFunctionTypeDeleteInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGoogleGroupSyncSettings = null,
        public readonly ?int $idFunctionType = null,
        public readonly ?string $functionType = null,
        public readonly ?bool $isDirect = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_GoogleGroupSyncSettings' => $this->idGoogleGroupSyncSettings,
            'ID_FunctionType' => $this->idFunctionType,
            'FunctionType' => $this->functionType,
            'IsDirect' => $this->isDirect,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
