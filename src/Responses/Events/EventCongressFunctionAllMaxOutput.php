<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventCongressFunctionAllMaxOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $maxCount = null,
        public readonly ?int $idFunctionType = null,
        public readonly ?string $functionType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            maxCount: isset($obj->{'MaxCount'}) ? (int) $obj->{'MaxCount'} : null,
            idFunctionType: isset($obj->{'ID_FunctionType'}) ? (int) $obj->{'ID_FunctionType'} : null,
            functionType: isset($obj->{'FunctionType'}) ? (string) $obj->{'FunctionType'} : null,
        );
    }
}
