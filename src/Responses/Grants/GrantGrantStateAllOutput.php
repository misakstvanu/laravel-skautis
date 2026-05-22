<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantGrantStateAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGrant = null,
        public readonly ?string $idGrantState = null,
        public readonly ?string $grantState = null,
        public readonly ?string $changed = null,
        public readonly ?string $changeNote = null,
        public readonly ?bool $isActual = null,
        public readonly ?int $idUser = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idGrant: isset($obj->{'ID_Grant'}) ? (int) $obj->{'ID_Grant'} : null,
            idGrantState: isset($obj->{'ID_GrantState'}) ? (string) $obj->{'ID_GrantState'} : null,
            grantState: isset($obj->{'GrantState'}) ? (string) $obj->{'GrantState'} : null,
            changed: isset($obj->{'Changed'}) ? (string) $obj->{'Changed'} : null,
            changeNote: isset($obj->{'ChangeNote'}) ? (string) $obj->{'ChangeNote'} : null,
            isActual: isset($obj->{'IsActual'}) ? (bool) $obj->{'IsActual'} : null,
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
        );
    }
}
