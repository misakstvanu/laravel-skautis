<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class OccupationDetailRealtyDownloadOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $requirementExtension = null,
        public readonly ?string $requirementFileContent = null,
        public readonly ?string $photoExtension = null,
        public readonly ?string $photoFileContent = null,
        public readonly ?int $idDocumentRequirement = null,
        public readonly ?int $idDocumentPhoto = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            requirementExtension: isset($obj->{'RequirementExtension'}) ? (string) $obj->{'RequirementExtension'} : null,
            requirementFileContent: isset($obj->{'RequirementFileContent'}) ? (string) $obj->{'RequirementFileContent'} : null,
            photoExtension: isset($obj->{'PhotoExtension'}) ? (string) $obj->{'PhotoExtension'} : null,
            photoFileContent: isset($obj->{'PhotoFileContent'}) ? (string) $obj->{'PhotoFileContent'} : null,
            idDocumentRequirement: isset($obj->{'ID_DocumentRequirement'}) ? (int) $obj->{'ID_DocumentRequirement'} : null,
            idDocumentPhoto: isset($obj->{'ID_DocumentPhoto'}) ? (int) $obj->{'ID_DocumentPhoto'} : null,
        );
    }
}
