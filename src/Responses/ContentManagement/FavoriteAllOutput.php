<?php

namespace Misakstvanu\LaravelSkautis\Responses\ContentManagement;

final class FavoriteAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?int $idPage = null,
        public readonly ?string $page = null,
        public readonly ?string $dateCreate = null,
        public readonly ?string $displayName = null,
        public readonly ?string $urlParameter = null,
        public readonly ?string $module = null,
        public readonly ?string $pageUrl = null,
        public readonly ?string $url = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            idPage: isset($obj->{'ID_Page'}) ? (int) $obj->{'ID_Page'} : null,
            page: isset($obj->{'Page'}) ? (string) $obj->{'Page'} : null,
            dateCreate: isset($obj->{'DateCreate'}) ? (string) $obj->{'DateCreate'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            urlParameter: isset($obj->{'UrlParameter'}) ? (string) $obj->{'UrlParameter'} : null,
            module: isset($obj->{'Module'}) ? (string) $obj->{'Module'} : null,
            pageUrl: isset($obj->{'PageUrl'}) ? (string) $obj->{'PageUrl'} : null,
            url: isset($obj->{'Url'}) ? (string) $obj->{'Url'} : null,
        );
    }
}
