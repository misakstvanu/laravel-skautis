<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantProjectParticipationInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGrantProject = null,
        public readonly ?string $grantProject = null,
        public readonly ?string $idProjectParticipationCategory = null,
        public readonly ?string $projectParticipationCategory = null,
        public readonly ?int $count = null,
        public readonly ?int $personDays = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_GrantProject' => $this->idGrantProject,
            'GrantProject' => $this->grantProject,
            'ID_ProjectParticipationCategory' => $this->idProjectParticipationCategory,
            'ProjectParticipationCategory' => $this->projectParticipationCategory,
            'Count' => $this->count,
            'PersonDays' => $this->personDays,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
