<?php

namespace Misakstvanu\LaravelSkautis\Responses\ContentManagement;

final class PageDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $url = null,
        public readonly ?string $helpUrl = null,
        public readonly ?string $help = null,
        public readonly ?string $idHelpType = null,
        public readonly ?string $helpType = null,
        public readonly ?int $idModule = null,
        public readonly ?string $module = null,
        public readonly ?string $history = null,
        public readonly ?bool $isFavorite = null,
        public readonly ?bool $isResetable = null,
        public readonly ?int $idMenu = null,
        public readonly ?bool $useTabBehaviour = null,
        public readonly ?string $tabName = null,
        public readonly ?bool $useSkautis = null,
        public readonly ?int $idUser = null,
        public readonly ?int $idPage = null,
        public readonly ?string $page = null,
        public readonly ?string $dateCreate = null,
        public readonly ?string $urlParameter = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            url: isset($obj->{'Url'}) ? (string) $obj->{'Url'} : null,
            helpUrl: isset($obj->{'HelpUrl'}) ? (string) $obj->{'HelpUrl'} : null,
            help: isset($obj->{'Help'}) ? (string) $obj->{'Help'} : null,
            idHelpType: isset($obj->{'ID_HelpType'}) ? (string) $obj->{'ID_HelpType'} : null,
            helpType: isset($obj->{'HelpType'}) ? (string) $obj->{'HelpType'} : null,
            idModule: isset($obj->{'ID_Module'}) ? (int) $obj->{'ID_Module'} : null,
            module: isset($obj->{'Module'}) ? (string) $obj->{'Module'} : null,
            history: isset($obj->{'History'}) ? (string) $obj->{'History'} : null,
            isFavorite: isset($obj->{'IsFavorite'}) ? (bool) $obj->{'IsFavorite'} : null,
            isResetable: isset($obj->{'IsResetable'}) ? (bool) $obj->{'IsResetable'} : null,
            idMenu: isset($obj->{'ID_Menu'}) ? (int) $obj->{'ID_Menu'} : null,
            useTabBehaviour: isset($obj->{'UseTabBehaviour'}) ? (bool) $obj->{'UseTabBehaviour'} : null,
            tabName: isset($obj->{'TabName'}) ? (string) $obj->{'TabName'} : null,
            useSkautis: isset($obj->{'UseSkautis'}) ? (bool) $obj->{'UseSkautis'} : null,
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            idPage: isset($obj->{'ID_Page'}) ? (int) $obj->{'ID_Page'} : null,
            page: isset($obj->{'Page'}) ? (string) $obj->{'Page'} : null,
            dateCreate: isset($obj->{'DateCreate'}) ? (string) $obj->{'DateCreate'} : null,
            urlParameter: isset($obj->{'UrlParameter'}) ? (string) $obj->{'UrlParameter'} : null,
        );
    }
}
