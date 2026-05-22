<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class MemberCardPrintAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $dateCreate = null,
        public readonly ?string $dateGenerated = null,
        public readonly ?string $memberCardPrintState = null,
        public readonly ?string $idMemberCardPrintState = null,
        public readonly ?string $error = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            dateCreate: isset($obj->{'DateCreate'}) ? (string) $obj->{'DateCreate'} : null,
            dateGenerated: isset($obj->{'DateGenerated'}) ? (string) $obj->{'DateGenerated'} : null,
            memberCardPrintState: isset($obj->{'MemberCardPrintState'}) ? (string) $obj->{'MemberCardPrintState'} : null,
            idMemberCardPrintState: isset($obj->{'ID_MemberCardPrintState'}) ? (string) $obj->{'ID_MemberCardPrintState'} : null,
            error: isset($obj->{'Error'}) ? (string) $obj->{'Error'} : null,
        );
    }
}
