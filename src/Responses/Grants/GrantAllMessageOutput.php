<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantAllMessageOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idGrantType = null,
        public readonly ?string $grantType = null,
        public readonly ?string $projectName = null,
        public readonly ?string $event = null,
        public readonly ?string $code = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idGrantType: isset($obj->{'ID_GrantType'}) ? (string) $obj->{'ID_GrantType'} : null,
            grantType: isset($obj->{'GrantType'}) ? (string) $obj->{'GrantType'} : null,
            projectName: isset($obj->{'ProjectName'}) ? (string) $obj->{'ProjectName'} : null,
            event: isset($obj->{'Event'}) ? (string) $obj->{'Event'} : null,
            code: isset($obj->{'Code'}) ? (string) $obj->{'Code'} : null,
        );
    }
}
