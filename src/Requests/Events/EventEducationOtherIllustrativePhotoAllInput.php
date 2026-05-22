<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationOtherIllustrativePhotoAllInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $id = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idEventEducationCourse = null,
        public readonly ?int $idEventEducationOther = null,
        public readonly ?int $idDocument = null,
        public readonly ?int $idDocumentSmall = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            'ID_EventEducation' => $this->idEventEducation,
            'ID_EventEducationCourse' => $this->idEventEducationCourse,
            'ID_EventEducationOther' => $this->idEventEducationOther,
            'ID_Document' => $this->idDocument,
            'ID_DocumentSmall' => $this->idDocumentSmall,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
