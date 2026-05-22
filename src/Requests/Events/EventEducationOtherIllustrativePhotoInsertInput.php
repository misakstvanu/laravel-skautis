<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationOtherIllustrativePhotoInsertInput
{
    public function __construct(
        public readonly ?string $idTempFile = null,
        public readonly ?int $id = null,
        public readonly ?int $idEventEducationOther = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idEventEducationCourse = null,
        public readonly ?int $idDocument = null,
        public readonly ?int $idDocumentSmall = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_TempFile' => $this->idTempFile,
            'ID' => $this->id,
            'ID_EventEducationOther' => $this->idEventEducationOther,
            'ID_EventEducation' => $this->idEventEducation,
            'ID_EventEducationCourse' => $this->idEventEducationCourse,
            'ID_Document' => $this->idDocument,
            'ID_DocumentSmall' => $this->idDocumentSmall,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
