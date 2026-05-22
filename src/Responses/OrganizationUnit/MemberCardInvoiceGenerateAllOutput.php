<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class MemberCardInvoiceGenerateAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $dateCreated = null,
        public readonly ?string $dateGenerating = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $idMemberCardInvoiceGenerateState = null,
        public readonly ?string $memberCardInvoiceGenerateState = null,
        public readonly ?int $idError = null,
        public readonly ?string $error = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            dateCreated: isset($obj->{'DateCreated'}) ? (string) $obj->{'DateCreated'} : null,
            dateGenerating: isset($obj->{'DateGenerating'}) ? (string) $obj->{'DateGenerating'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idMemberCardInvoiceGenerateState: isset($obj->{'ID_MemberCardInvoiceGenerateState'}) ? (string) $obj->{'ID_MemberCardInvoiceGenerateState'} : null,
            memberCardInvoiceGenerateState: isset($obj->{'MemberCardInvoiceGenerateState'}) ? (string) $obj->{'MemberCardInvoiceGenerateState'} : null,
            idError: isset($obj->{'ID_Error'}) ? (int) $obj->{'ID_Error'} : null,
            error: isset($obj->{'Error'}) ? (string) $obj->{'Error'} : null,
        );
    }
}
