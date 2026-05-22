<?php

namespace Misakstvanu\LaravelSkautis\Responses\Power;

final class AdvanceTypeDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isActive = null,
        public readonly ?string $note = null,
        public readonly ?string $contentHelp = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            contentHelp: isset($obj->{'ContentHelp'}) ? (string) $obj->{'ContentHelp'} : null,
        );
    }
}
