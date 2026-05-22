<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventTypeAllOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idTable = null,
        public readonly ?string $table = null,
        public readonly ?string $urlDetail = null,
        public readonly ?string $roleKey = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idTable: isset($obj->{'ID_Table'}) ? (string) $obj->{'ID_Table'} : null,
            table: isset($obj->{'Table'}) ? (string) $obj->{'Table'} : null,
            urlDetail: isset($obj->{'UrlDetail'}) ? (string) $obj->{'UrlDetail'} : null,
            roleKey: isset($obj->{'RoleKey'}) ? (string) $obj->{'RoleKey'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
