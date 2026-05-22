<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonPhotoOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $photoContent = null,
        public readonly ?string $photoBigContent = null,
        public readonly ?string $photoNormalContent = null,
        public readonly ?string $photoMediumContent = null,
        public readonly ?string $photoSmallContent = null,
        public readonly ?string $photoExtension = null,
        public readonly ?string $photoUpdate = null,
        public readonly ?int $idPersonPhotoBig = null,
        public readonly ?string $photoBigStorage = null,
        public readonly ?int $idPersonPhotoNormal = null,
        public readonly ?string $photoNormalStorage = null,
        public readonly ?int $idPersonPhotoMedium = null,
        public readonly ?string $photoMediumStorage = null,
        public readonly ?int $idPersonPhotoSmall = null,
        public readonly ?string $photoSmallStorage = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            photoContent: isset($obj->{'PhotoContent'}) ? (string) $obj->{'PhotoContent'} : null,
            photoBigContent: isset($obj->{'PhotoBigContent'}) ? (string) $obj->{'PhotoBigContent'} : null,
            photoNormalContent: isset($obj->{'PhotoNormalContent'}) ? (string) $obj->{'PhotoNormalContent'} : null,
            photoMediumContent: isset($obj->{'PhotoMediumContent'}) ? (string) $obj->{'PhotoMediumContent'} : null,
            photoSmallContent: isset($obj->{'PhotoSmallContent'}) ? (string) $obj->{'PhotoSmallContent'} : null,
            photoExtension: isset($obj->{'PhotoExtension'}) ? (string) $obj->{'PhotoExtension'} : null,
            photoUpdate: isset($obj->{'PhotoUpdate'}) ? (string) $obj->{'PhotoUpdate'} : null,
            idPersonPhotoBig: isset($obj->{'ID_PersonPhotoBig'}) ? (int) $obj->{'ID_PersonPhotoBig'} : null,
            photoBigStorage: isset($obj->{'PhotoBigStorage'}) ? (string) $obj->{'PhotoBigStorage'} : null,
            idPersonPhotoNormal: isset($obj->{'ID_PersonPhotoNormal'}) ? (int) $obj->{'ID_PersonPhotoNormal'} : null,
            photoNormalStorage: isset($obj->{'PhotoNormalStorage'}) ? (string) $obj->{'PhotoNormalStorage'} : null,
            idPersonPhotoMedium: isset($obj->{'ID_PersonPhotoMedium'}) ? (int) $obj->{'ID_PersonPhotoMedium'} : null,
            photoMediumStorage: isset($obj->{'PhotoMediumStorage'}) ? (string) $obj->{'PhotoMediumStorage'} : null,
            idPersonPhotoSmall: isset($obj->{'ID_PersonPhotoSmall'}) ? (int) $obj->{'ID_PersonPhotoSmall'} : null,
            photoSmallStorage: isset($obj->{'PhotoSmallStorage'}) ? (string) $obj->{'PhotoSmallStorage'} : null,
        );
    }
}
