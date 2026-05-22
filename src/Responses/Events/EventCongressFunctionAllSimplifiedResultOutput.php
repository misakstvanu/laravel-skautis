<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventCongressFunctionAllSimplifiedResultOutput
{
    public function __construct(
        public readonly ?int $idFunctionType = null,
        public readonly ?string $functionType = null,
        public readonly ?string $degreeInFrontOf = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $degreeBehind = null,
        public readonly ?string $birthday = null,
        public readonly ?string $personStreet = null,
        public readonly ?string $personCity = null,
        public readonly ?string $personPostcode = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idFunctionType: isset($obj->{'ID_FunctionType'}) ? (int) $obj->{'ID_FunctionType'} : null,
            functionType: isset($obj->{'FunctionType'}) ? (string) $obj->{'FunctionType'} : null,
            degreeInFrontOf: isset($obj->{'DegreeInFrontOf'}) ? (string) $obj->{'DegreeInFrontOf'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            degreeBehind: isset($obj->{'DegreeBehind'}) ? (string) $obj->{'DegreeBehind'} : null,
            birthday: isset($obj->{'Birthday'}) ? (string) $obj->{'Birthday'} : null,
            personStreet: isset($obj->{'PersonStreet'}) ? (string) $obj->{'PersonStreet'} : null,
            personCity: isset($obj->{'PersonCity'}) ? (string) $obj->{'PersonCity'} : null,
            personPostcode: isset($obj->{'PersonPostcode'}) ? (string) $obj->{'PersonPostcode'} : null,
        );
    }
}
