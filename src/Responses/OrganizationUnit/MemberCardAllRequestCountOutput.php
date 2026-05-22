<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class MemberCardAllRequestCountOutput
{
    public function __construct(
        public readonly ?string $idMemberCardType = null,
        public readonly ?string $memberCardType = null,
        public readonly ?int $requested = null,
        public readonly ?int $registrationAuthorized = null,
        public readonly ?int $notAuthorized = null,
        public readonly ?int $processing = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idMemberCardType: isset($obj->{'ID_MemberCardType'}) ? (string) $obj->{'ID_MemberCardType'} : null,
            memberCardType: isset($obj->{'MemberCardType'}) ? (string) $obj->{'MemberCardType'} : null,
            requested: isset($obj->{'Requested'}) ? (int) $obj->{'Requested'} : null,
            registrationAuthorized: isset($obj->{'RegistrationAuthorized'}) ? (int) $obj->{'RegistrationAuthorized'} : null,
            notAuthorized: isset($obj->{'NotAuthorized'}) ? (int) $obj->{'NotAuthorized'} : null,
            processing: isset($obj->{'Processing'}) ? (int) $obj->{'Processing'} : null,
        );
    }
}
