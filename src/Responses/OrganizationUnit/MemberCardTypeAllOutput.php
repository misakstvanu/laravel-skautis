<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class MemberCardTypeAllOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?bool $isActive = null,
        public readonly ?string $displayName = null,
        public readonly ?int $ageFrom = null,
        public readonly ?int $ageTo = null,
        public readonly ?bool $studentRequired = null,
        public readonly ?string $note = null,
        public readonly ?int $code = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            ageFrom: isset($obj->{'AgeFrom'}) ? (int) $obj->{'AgeFrom'} : null,
            ageTo: isset($obj->{'AgeTo'}) ? (int) $obj->{'AgeTo'} : null,
            studentRequired: isset($obj->{'StudentRequired'}) ? (bool) $obj->{'StudentRequired'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            code: isset($obj->{'Code'}) ? (int) $obj->{'Code'} : null,
        );
    }
}
