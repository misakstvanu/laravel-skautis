<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonDetailEventCongressParticipantInput
{
    public function __construct(
        public readonly ?int $idEventCongress = null,
        public readonly ?int $idParticipant = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCongress' => $this->idEventCongress,
            'ID_Participant' => $this->idParticipant,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
