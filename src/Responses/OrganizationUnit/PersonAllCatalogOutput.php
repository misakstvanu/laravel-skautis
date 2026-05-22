<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonAllCatalogOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $photoExtension = null,
        public readonly ?string $displayName = null,
        public readonly ?string $maidenName = null,
        public readonly ?string $membership = null,
        public readonly ?string $phone = null,
        public readonly ?bool $isSts = null,
        public readonly ?int $phoneCount = null,
        public readonly ?string $phoneDisplay = null,
        public readonly ?string $email = null,
        public readonly ?int $emailCount = null,
        public readonly ?string $emailDisplay = null,
        public readonly ?bool $participating = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            photoExtension: isset($obj->{'PhotoExtension'}) ? (string) $obj->{'PhotoExtension'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            maidenName: isset($obj->{'MaidenName'}) ? (string) $obj->{'MaidenName'} : null,
            membership: isset($obj->{'Membership'}) ? (string) $obj->{'Membership'} : null,
            phone: isset($obj->{'Phone'}) ? (string) $obj->{'Phone'} : null,
            isSts: isset($obj->{'IsSts'}) ? (bool) $obj->{'IsSts'} : null,
            phoneCount: isset($obj->{'PhoneCount'}) ? (int) $obj->{'PhoneCount'} : null,
            phoneDisplay: isset($obj->{'PhoneDisplay'}) ? (string) $obj->{'PhoneDisplay'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            emailCount: isset($obj->{'EmailCount'}) ? (int) $obj->{'EmailCount'} : null,
            emailDisplay: isset($obj->{'EmailDisplay'}) ? (string) $obj->{'EmailDisplay'} : null,
            participating: isset($obj->{'Participating'}) ? (bool) $obj->{'Participating'} : null,
        );
    }
}
