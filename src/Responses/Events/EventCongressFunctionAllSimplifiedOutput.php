<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventCongressFunctionAllSimplifiedOutput
{
    public function __construct(
        public readonly ?int $idFunctionType = null,
        public readonly ?string $functionType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idFunctionType: isset($obj->{'ID_FunctionType'}) ? (int) $obj->{'ID_FunctionType'} : null,
            functionType: isset($obj->{'FunctionType'}) ? (string) $obj->{'FunctionType'} : null,
        );
    }
}
