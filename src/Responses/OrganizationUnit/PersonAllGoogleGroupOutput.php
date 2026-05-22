<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonAllGoogleGroupOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $email = null,
        public readonly ?string $idContactType = null,
        public readonly ?bool $isGa = null,
        public readonly ?bool $canRead = null,
        public readonly ?bool $isOwner = null,
        public readonly ?bool $isPerson = null,
        public readonly ?bool $isDuplicate = null,
        public readonly ?bool $isManual = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            idContactType: isset($obj->{'ID_ContactType'}) ? (string) $obj->{'ID_ContactType'} : null,
            isGa: isset($obj->{'IsGa'}) ? (bool) $obj->{'IsGa'} : null,
            canRead: isset($obj->{'CanRead'}) ? (bool) $obj->{'CanRead'} : null,
            isOwner: isset($obj->{'IsOwner'}) ? (bool) $obj->{'IsOwner'} : null,
            isPerson: isset($obj->{'IsPerson'}) ? (bool) $obj->{'IsPerson'} : null,
            isDuplicate: isset($obj->{'IsDuplicate'}) ? (bool) $obj->{'IsDuplicate'} : null,
            isManual: isset($obj->{'IsManual'}) ? (bool) $obj->{'IsManual'} : null,
        );
    }
}
