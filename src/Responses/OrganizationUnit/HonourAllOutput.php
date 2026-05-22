<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class HonourAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isActive = null,
        public readonly ?string $description = null,
        public readonly ?string $fileName = null,
        public readonly ?string $stateUrl = null,
        public readonly ?string $descriptionUrl = null,
        public readonly ?int $personCount = null,
        public readonly ?int $maxCount = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            fileName: isset($obj->{'FileName'}) ? (string) $obj->{'FileName'} : null,
            stateUrl: isset($obj->{'StateUrl'}) ? (string) $obj->{'StateUrl'} : null,
            descriptionUrl: isset($obj->{'DescriptionUrl'}) ? (string) $obj->{'DescriptionUrl'} : null,
            personCount: isset($obj->{'PersonCount'}) ? (int) $obj->{'PersonCount'} : null,
            maxCount: isset($obj->{'MaxCount'}) ? (int) $obj->{'MaxCount'} : null,
        );
    }
}
