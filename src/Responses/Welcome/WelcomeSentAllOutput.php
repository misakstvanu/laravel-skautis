<?php

namespace Misakstvanu\LaravelSkautis\Responses\Welcome;

final class WelcomeSentAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $email = null,
        public readonly ?string $dateSent = null,
        public readonly ?string $idWelcomeSentState = null,
        public readonly ?string $welcomeSentState = null,
        public readonly ?int $idFunction = null,
        public readonly ?int $idFunctionType = null,
        public readonly ?string $functionType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            dateSent: isset($obj->{'DateSent'}) ? (string) $obj->{'DateSent'} : null,
            idWelcomeSentState: isset($obj->{'ID_WelcomeSentState'}) ? (string) $obj->{'ID_WelcomeSentState'} : null,
            welcomeSentState: isset($obj->{'WelcomeSentState'}) ? (string) $obj->{'WelcomeSentState'} : null,
            idFunction: isset($obj->{'ID_Function'}) ? (int) $obj->{'ID_Function'} : null,
            idFunctionType: isset($obj->{'ID_FunctionType'}) ? (int) $obj->{'ID_FunctionType'} : null,
            functionType: isset($obj->{'FunctionType'}) ? (string) $obj->{'FunctionType'} : null,
        );
    }
}
