<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class MemberCardDetailValidOutput
{
    public function __construct(
        public readonly ?string $validTo = null,
        public readonly ?string $memberCardType = null,
        public readonly ?bool $isStudent = null,
        public readonly ?bool $isMemberCard = null,
        public readonly ?bool $isValid = null,
        public readonly ?string $idMemberCardType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            memberCardType: isset($obj->{'MemberCardType'}) ? (string) $obj->{'MemberCardType'} : null,
            isStudent: isset($obj->{'IsStudent'}) ? (bool) $obj->{'IsStudent'} : null,
            isMemberCard: isset($obj->{'IsMemberCard'}) ? (bool) $obj->{'IsMemberCard'} : null,
            isValid: isset($obj->{'IsValid'}) ? (bool) $obj->{'IsValid'} : null,
            idMemberCardType: isset($obj->{'ID_MemberCardType'}) ? (string) $obj->{'ID_MemberCardType'} : null,
        );
    }
}
