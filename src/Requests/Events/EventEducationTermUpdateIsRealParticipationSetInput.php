<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationTermUpdateIsRealParticipationSetInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $isActive = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idEventEducationLocation = null,
        public readonly ?string $eventEducationLocation = null,
        public readonly ?string $dateFrom = null,
        public readonly ?string $dateTo = null,
        public readonly ?string $note = null,
        public readonly ?bool $isRealParticipationSet = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'IsActive' => $this->isActive,
            'DisplayName' => $this->displayName,
            'ID_EventEducation' => $this->idEventEducation,
            'ID_EventEducationLocation' => $this->idEventEducationLocation,
            'EventEducationLocation' => $this->eventEducationLocation,
            'DateFrom' => $this->dateFrom,
            'DateTo' => $this->dateTo,
            'Note' => $this->note,
            'IsRealParticipationSet' => $this->isRealParticipationSet,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
