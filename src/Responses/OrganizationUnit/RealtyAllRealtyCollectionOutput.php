<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class RealtyAllRealtyCollectionOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $validTo = null,
        public readonly ?string $ownerType = null,
        public readonly ?string $note = null,
        public readonly ?string $photoExtension = null,
        public readonly ?string $fotogalleryUrl = null,
        public readonly ?string $ownerTypeNote = null,
        public readonly ?string $description = null,
        public readonly ?int $idDocument = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            ownerType: isset($obj->{'OwnerType'}) ? (string) $obj->{'OwnerType'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            photoExtension: isset($obj->{'PhotoExtension'}) ? (string) $obj->{'PhotoExtension'} : null,
            fotogalleryUrl: isset($obj->{'FotogalleryUrl'}) ? (string) $obj->{'FotogalleryUrl'} : null,
            ownerTypeNote: isset($obj->{'OwnerTypeNote'}) ? (string) $obj->{'OwnerTypeNote'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            idDocument: isset($obj->{'ID_Document'}) ? (int) $obj->{'ID_Document'} : null,
        );
    }
}
