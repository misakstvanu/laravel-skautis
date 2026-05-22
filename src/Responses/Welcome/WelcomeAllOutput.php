<?php

namespace Misakstvanu\LaravelSkautis\Responses\Welcome;

final class WelcomeAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idFunctionType = null,
        public readonly ?string $functionType = null,
        public readonly ?bool $isEnabled = null,
        public readonly ?bool $isParentUnit = null,
        public readonly ?bool $isSupervisorSent = null,
        public readonly ?bool $sendToAll = null,
        public readonly ?bool $isFinal = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idFunctionType: isset($obj->{'ID_FunctionType'}) ? (int) $obj->{'ID_FunctionType'} : null,
            functionType: isset($obj->{'FunctionType'}) ? (string) $obj->{'FunctionType'} : null,
            isEnabled: isset($obj->{'IsEnabled'}) ? (bool) $obj->{'IsEnabled'} : null,
            isParentUnit: isset($obj->{'IsParentUnit'}) ? (bool) $obj->{'IsParentUnit'} : null,
            isSupervisorSent: isset($obj->{'IsSupervisorSent'}) ? (bool) $obj->{'IsSupervisorSent'} : null,
            sendToAll: isset($obj->{'SendToAll'}) ? (bool) $obj->{'SendToAll'} : null,
            isFinal: isset($obj->{'IsFinal'}) ? (bool) $obj->{'IsFinal'} : null,
        );
    }
}
