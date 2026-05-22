<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationLetterRequestAllExportInput
{
    public function __construct(
        public readonly ?string $idItems = null,
        public readonly ?bool $isParticipantEducation = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Items' => $this->idItems,
            'IsParticipantEducation' => $this->isParticipantEducation,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
