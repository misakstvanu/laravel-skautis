<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class DomainDetailEmailsOutput
{
    public function __construct(
        public readonly ?string $owner = null,
        public readonly ?int $ownerID = null,
        public readonly ?string $email = null,
        public readonly ?string $dateCreated = null,
        public readonly ?string $type = null,
        public readonly ?bool $isMain = null,
        public readonly ?string $typeName = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            owner: isset($obj->{'Owner'}) ? (string) $obj->{'Owner'} : null,
            ownerID: isset($obj->{'OwnerID'}) ? (int) $obj->{'OwnerID'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            dateCreated: isset($obj->{'DateCreated'}) ? (string) $obj->{'DateCreated'} : null,
            type: isset($obj->{'Type'}) ? (string) $obj->{'Type'} : null,
            isMain: isset($obj->{'IsMain'}) ? (bool) $obj->{'IsMain'} : null,
            typeName: isset($obj->{'TypeName'}) ? (string) $obj->{'TypeName'} : null,
        );
    }
}
