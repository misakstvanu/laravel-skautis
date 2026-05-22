<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationLetterRequestAllInput
{
    public function __construct(
        public readonly ?string $person = null,
        public readonly ?string $eventEducation = null,
        public readonly ?string $identificationCode = null,
        public readonly ?string $eventEducationLetterRequestFilter = null,
        public readonly ?string $idQualificationType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Person' => $this->person,
            'EventEducation' => $this->eventEducation,
            'IdentificationCode' => $this->identificationCode,
            'EventEducationLetterRequestFilter' => $this->eventEducationLetterRequestFilter,
            'ID_QualificationType' => $this->idQualificationType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
