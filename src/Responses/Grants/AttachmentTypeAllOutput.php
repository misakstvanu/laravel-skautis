<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class AttachmentTypeAllOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isActive = null,
        public readonly ?string $note = null,
        public readonly ?string $idGrantType = null,
        public readonly ?string $grantType = null,
        public readonly ?bool $isAutoAdd = null,
        public readonly ?int $order = null,
        public readonly ?string $help = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            idGrantType: isset($obj->{'ID_GrantType'}) ? (string) $obj->{'ID_GrantType'} : null,
            grantType: isset($obj->{'GrantType'}) ? (string) $obj->{'GrantType'} : null,
            isAutoAdd: isset($obj->{'IsAutoAdd'}) ? (bool) $obj->{'IsAutoAdd'} : null,
            order: isset($obj->{'Order'}) ? (int) $obj->{'Order'} : null,
            help: isset($obj->{'Help'}) ? (string) $obj->{'Help'} : null,
        );
    }
}
