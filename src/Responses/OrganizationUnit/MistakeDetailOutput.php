<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class MistakeDetailOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isUnit = null,
        public readonly ?string $idMistakeType = null,
        public readonly ?string $mistakeType = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            isUnit: isset($obj->{'IsUnit'}) ? (bool) $obj->{'IsUnit'} : null,
            idMistakeType: isset($obj->{'ID_MistakeType'}) ? (string) $obj->{'ID_MistakeType'} : null,
            mistakeType: isset($obj->{'MistakeType'}) ? (string) $obj->{'MistakeType'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
