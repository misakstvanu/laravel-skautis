<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantTypeTextDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?string $idGrantType = null,
        public readonly ?string $grantType = null,
        public readonly ?string $displayName = null,
        public readonly ?string $text = null,
        public readonly ?bool $isActive = null,
        public readonly ?string $note = null,
        public readonly ?string $idGrantTypeTextCategory = null,
        public readonly ?string $grantTypeTextCategory = null,
        public readonly ?int $order = null,
        public readonly ?bool $isNumbered = null,
        public readonly ?bool $forChange = null,
        public readonly ?bool $forRevoke = null,
        public readonly ?bool $forFirstRevoke = null,
        public readonly ?string $textWithoutLines = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idGrantType: isset($obj->{'ID_GrantType'}) ? (string) $obj->{'ID_GrantType'} : null,
            grantType: isset($obj->{'GrantType'}) ? (string) $obj->{'GrantType'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            text: isset($obj->{'Text'}) ? (string) $obj->{'Text'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            idGrantTypeTextCategory: isset($obj->{'ID_GrantTypeTextCategory'}) ? (string) $obj->{'ID_GrantTypeTextCategory'} : null,
            grantTypeTextCategory: isset($obj->{'GrantTypeTextCategory'}) ? (string) $obj->{'GrantTypeTextCategory'} : null,
            order: isset($obj->{'Order'}) ? (int) $obj->{'Order'} : null,
            isNumbered: isset($obj->{'IsNumbered'}) ? (bool) $obj->{'IsNumbered'} : null,
            forChange: isset($obj->{'ForChange'}) ? (bool) $obj->{'ForChange'} : null,
            forRevoke: isset($obj->{'ForRevoke'}) ? (bool) $obj->{'ForRevoke'} : null,
            forFirstRevoke: isset($obj->{'ForFirstRevoke'}) ? (bool) $obj->{'ForFirstRevoke'} : null,
            textWithoutLines: isset($obj->{'TextWithoutLines'}) ? (string) $obj->{'TextWithoutLines'} : null,
        );
    }
}
