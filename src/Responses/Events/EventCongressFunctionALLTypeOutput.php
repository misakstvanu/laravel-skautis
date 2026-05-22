<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventCongressFunctionALLTypeOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?int $idFunctionType = null,
        public readonly ?string $idUnitType = null,
        public readonly ?string $displayName = null,
        public readonly ?string $code = null,
        public readonly ?bool $exists = null,
        public readonly ?bool $isUsed = null,
        public readonly ?string $functionClass = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            idFunctionType: isset($obj->{'ID_FunctionType'}) ? (int) $obj->{'ID_FunctionType'} : null,
            idUnitType: isset($obj->{'ID_UnitType'}) ? (string) $obj->{'ID_UnitType'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            code: isset($obj->{'Code'}) ? (string) $obj->{'Code'} : null,
            exists: isset($obj->{'Exists'}) ? (bool) $obj->{'Exists'} : null,
            isUsed: isset($obj->{'IsUsed'}) ? (bool) $obj->{'IsUsed'} : null,
            functionClass: isset($obj->{'FunctionClass'}) ? (string) $obj->{'FunctionClass'} : null,
        );
    }
}
