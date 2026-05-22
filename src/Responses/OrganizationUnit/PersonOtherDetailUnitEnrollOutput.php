<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonOtherDetailUnitEnrollOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $dateUnitEnrollCondition = null,
        public readonly ?int $idUserUnitEnrollCondition = null,
        public readonly ?string $userUnitEnrollCondition = null,
        public readonly ?bool $allowDataStorage = null,
        public readonly ?bool $allowAudiovisual = null,
        public readonly ?bool $allowSocialNetwork = null,
        public readonly ?bool $allowMarketing = null,
        public readonly ?string $unitEnrollAcceptText = null,
        public readonly ?string $fileName = null,
        public readonly ?string $fileContent = null,
        public readonly ?int $idUnitEnrollTempFile = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            dateUnitEnrollCondition: isset($obj->{'DateUnitEnrollCondition'}) ? (string) $obj->{'DateUnitEnrollCondition'} : null,
            idUserUnitEnrollCondition: isset($obj->{'ID_UserUnitEnrollCondition'}) ? (int) $obj->{'ID_UserUnitEnrollCondition'} : null,
            userUnitEnrollCondition: isset($obj->{'UserUnitEnrollCondition'}) ? (string) $obj->{'UserUnitEnrollCondition'} : null,
            allowDataStorage: isset($obj->{'AllowDataStorage'}) ? (bool) $obj->{'AllowDataStorage'} : null,
            allowAudiovisual: isset($obj->{'AllowAudiovisual'}) ? (bool) $obj->{'AllowAudiovisual'} : null,
            allowSocialNetwork: isset($obj->{'AllowSocialNetwork'}) ? (bool) $obj->{'AllowSocialNetwork'} : null,
            allowMarketing: isset($obj->{'AllowMarketing'}) ? (bool) $obj->{'AllowMarketing'} : null,
            unitEnrollAcceptText: isset($obj->{'UnitEnrollAcceptText'}) ? (string) $obj->{'UnitEnrollAcceptText'} : null,
            fileName: isset($obj->{'FileName'}) ? (string) $obj->{'FileName'} : null,
            fileContent: isset($obj->{'FileContent'}) ? (string) $obj->{'FileContent'} : null,
            idUnitEnrollTempFile: isset($obj->{'ID_UnitEnrollTempFile'}) ? (int) $obj->{'ID_UnitEnrollTempFile'} : null,
        );
    }
}
