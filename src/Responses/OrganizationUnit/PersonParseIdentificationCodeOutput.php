<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonParseIdentificationCodeOutput
{
    public function __construct(
        public readonly ?string $birthday = null,
        public readonly ?string $idSex = null,
        public readonly ?bool $isValid = null,
        public readonly ?bool $isValidChecksum = null,
        public readonly ?string $idMembershipCategory = null,
        public readonly ?bool $exists = null,
        public readonly ?int $age = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            birthday: isset($obj->{'Birthday'}) ? (string) $obj->{'Birthday'} : null,
            idSex: isset($obj->{'ID_Sex'}) ? (string) $obj->{'ID_Sex'} : null,
            isValid: isset($obj->{'IsValid'}) ? (bool) $obj->{'IsValid'} : null,
            isValidChecksum: isset($obj->{'IsValidChecksum'}) ? (bool) $obj->{'IsValidChecksum'} : null,
            idMembershipCategory: isset($obj->{'ID_MembershipCategory'}) ? (string) $obj->{'ID_MembershipCategory'} : null,
            exists: isset($obj->{'Exists'}) ? (bool) $obj->{'Exists'} : null,
            age: isset($obj->{'Age'}) ? (int) $obj->{'Age'} : null,
        );
    }
}
