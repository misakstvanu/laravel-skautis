<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonSchoolUpdateSchoolInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $displayName = null,
        public readonly ?string $city = null,
        public readonly ?string $extension = null,
        public readonly ?string $scan = null,
        public readonly ?string $dateCreate = null,
        public readonly ?string $photoExtension = null,
        public readonly ?string $photo = null,
        public readonly ?string $idTempFile = null,
        public readonly ?string $idPersonSchoolTempFile = null,
        public readonly ?int $idDocumentPhoto = null,
        public readonly ?int $idDocumentScan = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'DisplayName' => $this->displayName,
            'City' => $this->city,
            'Extension' => $this->extension,
            'Scan' => $this->scan,
            'DateCreate' => $this->dateCreate,
            'PhotoExtension' => $this->photoExtension,
            'Photo' => $this->photo,
            'ID_TempFile' => $this->idTempFile,
            'ID_PersonSchoolTempFile' => $this->idPersonSchoolTempFile,
            'ID_DocumentPhoto' => $this->idDocumentPhoto,
            'ID_DocumentScan' => $this->idDocumentScan,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
