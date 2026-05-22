<?php

namespace Misakstvanu\LaravelSkautis\Responses\ContentManagement;

final class TabAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $masterPage = null,
        public readonly ?int $idPage = null,
        public readonly ?string $page = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isActive = null,
        public readonly ?string $note = null,
        public readonly ?int $order = null,
        public readonly ?bool $workInProgress = null,
        public readonly ?string $url = null,
        public readonly ?int $idTabUser = null,
        public readonly ?string $cssClass = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            masterPage: isset($obj->{'MasterPage'}) ? (string) $obj->{'MasterPage'} : null,
            idPage: isset($obj->{'ID_Page'}) ? (int) $obj->{'ID_Page'} : null,
            page: isset($obj->{'Page'}) ? (string) $obj->{'Page'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            order: isset($obj->{'Order'}) ? (int) $obj->{'Order'} : null,
            workInProgress: isset($obj->{'WorkInProgress'}) ? (bool) $obj->{'WorkInProgress'} : null,
            url: isset($obj->{'Url'}) ? (string) $obj->{'Url'} : null,
            idTabUser: isset($obj->{'ID_TabUser'}) ? (int) $obj->{'ID_TabUser'} : null,
            cssClass: isset($obj->{'CssClass'}) ? (string) $obj->{'CssClass'} : null,
        );
    }
}
