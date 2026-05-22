<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class CandidateFunctionAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idCandidate = null,
        public readonly ?int $idFunction = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?int $idFunctionType = null,
        public readonly ?string $functionType = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idCandidate: isset($obj->{'ID_Candidate'}) ? (int) $obj->{'ID_Candidate'} : null,
            idFunction: isset($obj->{'ID_Function'}) ? (int) $obj->{'ID_Function'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            idFunctionType: isset($obj->{'ID_FunctionType'}) ? (int) $obj->{'ID_FunctionType'} : null,
            functionType: isset($obj->{'FunctionType'}) ? (string) $obj->{'FunctionType'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
        );
    }
}
