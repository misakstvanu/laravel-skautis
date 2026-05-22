<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonDetailCanHaveFreeJournalOutput
{
    public function __construct(
        public readonly ?int $idFunction = null,
        public readonly ?string $functionType = null,
        public readonly ?int $idUnit = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idFunction: isset($obj->{'ID_Function'}) ? (int) $obj->{'ID_Function'} : null,
            functionType: isset($obj->{'FunctionType'}) ? (string) $obj->{'FunctionType'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
        );
    }
}
