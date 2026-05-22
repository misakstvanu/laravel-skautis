<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class QualificationTypeDetailOutput
{
    public function __construct(
        public readonly ?int $validityLength = null,
        public readonly ?int $renewalLength = null,
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?bool $isActive = null,
        public readonly ?string $displayName = null,
        public readonly ?string $note = null,
        public readonly ?string $key = null,
        public readonly ?bool $isRequest = null,
        public readonly ?bool $isLetterRequest = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            validityLength: isset($obj->{'ValidityLength'}) ? (int) $obj->{'ValidityLength'} : null,
            renewalLength: isset($obj->{'RenewalLength'}) ? (int) $obj->{'RenewalLength'} : null,
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            key: isset($obj->{'Key'}) ? (string) $obj->{'Key'} : null,
            isRequest: isset($obj->{'IsRequest'}) ? (bool) $obj->{'IsRequest'} : null,
            isLetterRequest: isset($obj->{'IsLetterRequest'}) ? (bool) $obj->{'IsLetterRequest'} : null,
        );
    }
}
