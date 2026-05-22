<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class MemberCardPrintDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?string $dateCreate = null,
        public readonly ?string $idMemberCardPrintState = null,
        public readonly ?string $memberCardPrintState = null,
        public readonly ?string $dateGenerated = null,
        public readonly ?string $error = null,
        public readonly ?int $count = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            dateCreate: isset($obj->{'DateCreate'}) ? (string) $obj->{'DateCreate'} : null,
            idMemberCardPrintState: isset($obj->{'ID_MemberCardPrintState'}) ? (string) $obj->{'ID_MemberCardPrintState'} : null,
            memberCardPrintState: isset($obj->{'MemberCardPrintState'}) ? (string) $obj->{'MemberCardPrintState'} : null,
            dateGenerated: isset($obj->{'DateGenerated'}) ? (string) $obj->{'DateGenerated'} : null,
            error: isset($obj->{'Error'}) ? (string) $obj->{'Error'} : null,
            count: isset($obj->{'Count'}) ? (int) $obj->{'Count'} : null,
        );
    }
}
