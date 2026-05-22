<?php

namespace Misakstvanu\LaravelSkautis\Responses\ContentManagement;

final class PageStateDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?int $idKnown = null,
        public readonly ?int $idPage = null,
        public readonly ?string $page = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isDefault = null,
        public readonly mixed $data = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            idKnown: isset($obj->{'ID_Known'}) ? (int) $obj->{'ID_Known'} : null,
            idPage: isset($obj->{'ID_Page'}) ? (int) $obj->{'ID_Page'} : null,
            page: isset($obj->{'Page'}) ? (string) $obj->{'Page'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            isDefault: isset($obj->{'IsDefault'}) ? (bool) $obj->{'IsDefault'} : null,
            data: $obj->{'Data'} ?? null,
        );
    }
}
