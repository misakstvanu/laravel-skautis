<?php

namespace Misakstvanu\LaravelSkautis\Responses\Welcome;

final class WelcomeFunctionAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idWelcome = null,
        public readonly ?string $welcome = null,
        public readonly ?int $idFunctionType = null,
        public readonly ?string $functionType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idWelcome: isset($obj->{'ID_Welcome'}) ? (int) $obj->{'ID_Welcome'} : null,
            welcome: isset($obj->{'Welcome'}) ? (string) $obj->{'Welcome'} : null,
            idFunctionType: isset($obj->{'ID_FunctionType'}) ? (int) $obj->{'ID_FunctionType'} : null,
            functionType: isset($obj->{'FunctionType'}) ? (string) $obj->{'FunctionType'} : null,
        );
    }
}
