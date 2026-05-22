<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonDetailDashboardOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $allMessages = null,
        public readonly ?int $unreadMessages = null,
        public readonly ?int $allFavorites = null,
        public readonly ?string $lastLogin = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            allMessages: isset($obj->{'AllMessages'}) ? (int) $obj->{'AllMessages'} : null,
            unreadMessages: isset($obj->{'UnreadMessages'}) ? (int) $obj->{'UnreadMessages'} : null,
            allFavorites: isset($obj->{'AllFavorites'}) ? (int) $obj->{'AllFavorites'} : null,
            lastLogin: isset($obj->{'LastLogin'}) ? (string) $obj->{'LastLogin'} : null,
        );
    }
}
