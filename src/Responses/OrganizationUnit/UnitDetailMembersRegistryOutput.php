<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitDetailMembersRegistryOutput
{
    public function __construct(
        public readonly ?int $year = null,
        public readonly ?int $membersTo6 = null,
        public readonly ?int $membersTo15 = null,
        public readonly ?int $membersTo18 = null,
        public readonly ?int $membersTo26 = null,
        public readonly ?int $membersFrom26 = null,
        public readonly ?int $regularMembersTo6 = null,
        public readonly ?int $regularMembersTo15 = null,
        public readonly ?int $regularMembersTo18 = null,
        public readonly ?int $regularMembersTo26 = null,
        public readonly ?int $regularMembersFrom26 = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            membersTo6: isset($obj->{'MembersTo6'}) ? (int) $obj->{'MembersTo6'} : null,
            membersTo15: isset($obj->{'MembersTo15'}) ? (int) $obj->{'MembersTo15'} : null,
            membersTo18: isset($obj->{'MembersTo18'}) ? (int) $obj->{'MembersTo18'} : null,
            membersTo26: isset($obj->{'MembersTo26'}) ? (int) $obj->{'MembersTo26'} : null,
            membersFrom26: isset($obj->{'MembersFrom26'}) ? (int) $obj->{'MembersFrom26'} : null,
            regularMembersTo6: isset($obj->{'RegularMembersTo6'}) ? (int) $obj->{'RegularMembersTo6'} : null,
            regularMembersTo15: isset($obj->{'RegularMembersTo15'}) ? (int) $obj->{'RegularMembersTo15'} : null,
            regularMembersTo18: isset($obj->{'RegularMembersTo18'}) ? (int) $obj->{'RegularMembersTo18'} : null,
            regularMembersTo26: isset($obj->{'RegularMembersTo26'}) ? (int) $obj->{'RegularMembersTo26'} : null,
            regularMembersFrom26: isset($obj->{'RegularMembersFrom26'}) ? (int) $obj->{'RegularMembersFrom26'} : null,
        );
    }
}
