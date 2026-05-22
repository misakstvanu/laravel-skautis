<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class MemberCardAllSummaryOutput
{
    public function __construct(
        public readonly ?string $idMemberCardType = null,
        public readonly ?string $memberCardType = null,
        public readonly ?int $year = null,
        public readonly ?int $count = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idMemberCardType: isset($obj->{'ID_MemberCardType'}) ? (string) $obj->{'ID_MemberCardType'} : null,
            memberCardType: isset($obj->{'MemberCardType'}) ? (string) $obj->{'MemberCardType'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            count: isset($obj->{'Count'}) ? (int) $obj->{'Count'} : null,
        );
    }
}
