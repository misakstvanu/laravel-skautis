<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantProjectDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?int $idGrant = null,
        public readonly ?string $displayName = null,
        public readonly ?string $description = null,
        public readonly ?string $from = null,
        public readonly ?string $to = null,
        public readonly ?string $idDateType = null,
        public readonly ?string $dateType = null,
        public readonly ?string $place = null,
        public readonly ?string $note = null,
        public readonly ?bool $isActive = null,
        public readonly ?bool $isGrantWide = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            idGrant: isset($obj->{'ID_Grant'}) ? (int) $obj->{'ID_Grant'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            from: isset($obj->{'From'}) ? (string) $obj->{'From'} : null,
            to: isset($obj->{'To'}) ? (string) $obj->{'To'} : null,
            idDateType: isset($obj->{'ID_DateType'}) ? (string) $obj->{'ID_DateType'} : null,
            dateType: isset($obj->{'DateType'}) ? (string) $obj->{'DateType'} : null,
            place: isset($obj->{'Place'}) ? (string) $obj->{'Place'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            isGrantWide: isset($obj->{'IsGrantWide'}) ? (bool) $obj->{'IsGrantWide'} : null,
        );
    }
}
