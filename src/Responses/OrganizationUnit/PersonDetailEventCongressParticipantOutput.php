<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonDetailEventCongressParticipantOutput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?string $email = null,
        public readonly ?string $phone = null,
        public readonly ?string $address = null,
        public readonly ?string $street = null,
        public readonly ?string $city = null,
        public readonly ?string $postcode = null,
        public readonly ?string $state = null,
        public readonly ?string $idCardNumber = null,
        public readonly ?string $idCardValidTo = null,
        public readonly ?string $idCardInfo = null,
        public readonly ?bool $isUser = null,
        public readonly ?bool $hideButtonEdit = null,
        public readonly ?bool $isAddressAuthenticated = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            phone: isset($obj->{'Phone'}) ? (string) $obj->{'Phone'} : null,
            address: isset($obj->{'Address'}) ? (string) $obj->{'Address'} : null,
            street: isset($obj->{'Street'}) ? (string) $obj->{'Street'} : null,
            city: isset($obj->{'City'}) ? (string) $obj->{'City'} : null,
            postcode: isset($obj->{'Postcode'}) ? (string) $obj->{'Postcode'} : null,
            state: isset($obj->{'State'}) ? (string) $obj->{'State'} : null,
            idCardNumber: isset($obj->{'IdCardNumber'}) ? (string) $obj->{'IdCardNumber'} : null,
            idCardValidTo: isset($obj->{'IdCardValidTo'}) ? (string) $obj->{'IdCardValidTo'} : null,
            idCardInfo: isset($obj->{'IdCardInfo'}) ? (string) $obj->{'IdCardInfo'} : null,
            isUser: isset($obj->{'IsUser'}) ? (bool) $obj->{'IsUser'} : null,
            hideButtonEdit: isset($obj->{'HideButtonEdit'}) ? (bool) $obj->{'HideButtonEdit'} : null,
            isAddressAuthenticated: isset($obj->{'IsAddressAuthenticated'}) ? (bool) $obj->{'IsAddressAuthenticated'} : null,
        );
    }
}
