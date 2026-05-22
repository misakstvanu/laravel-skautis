<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class SyncSettingsFunctionTypeAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGoogleGroupSyncSettings = null,
        public readonly ?int $idFunctionType = null,
        public readonly ?string $functionType = null,
        public readonly ?bool $isDirect = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idGoogleGroupSyncSettings: isset($obj->{'ID_GoogleGroupSyncSettings'}) ? (int) $obj->{'ID_GoogleGroupSyncSettings'} : null,
            idFunctionType: isset($obj->{'ID_FunctionType'}) ? (int) $obj->{'ID_FunctionType'} : null,
            functionType: isset($obj->{'FunctionType'}) ? (string) $obj->{'FunctionType'} : null,
            isDirect: isset($obj->{'IsDirect'}) ? (bool) $obj->{'IsDirect'} : null,
        );
    }
}
