<?php

namespace Misakstvanu\LaravelSkautis\Requests\Reports;

final class EventEducationExportInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?string $idEventEducationGroup = null,
        public readonly ?string $displayNameFilter = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EventEducationType' => $this->idEventEducationType,
            'ID_EventEducationGroup' => $this->idEventEducationGroup,
            'DisplayNameFilter' => $this->displayNameFilter,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
