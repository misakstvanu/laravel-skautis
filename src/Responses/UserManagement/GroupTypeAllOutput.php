<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class GroupTypeAllOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idTable = null,
        public readonly ?string $table = null,
        public readonly ?bool $canLogin = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idTable: isset($obj->{'ID_Table'}) ? (string) $obj->{'ID_Table'} : null,
            table: isset($obj->{'Table'}) ? (string) $obj->{'Table'} : null,
            canLogin: isset($obj->{'CanLogin'}) ? (bool) $obj->{'CanLogin'} : null,
        );
    }
}
