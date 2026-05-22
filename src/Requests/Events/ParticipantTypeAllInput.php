<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class ParticipantTypeAllInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?string $idEventType = null,
        public readonly ?bool $isManual = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'ID_EventType' => $this->idEventType,
            'IsManual' => $this->isManual,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
