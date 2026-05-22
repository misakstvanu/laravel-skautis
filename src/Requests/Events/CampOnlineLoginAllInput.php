<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class CampOnlineLoginAllInput
{
    public function __construct(
        public readonly ?int $idEventCamp = null,
        public readonly ?bool $onlyUsable = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCamp' => $this->idEventCamp,
            'OnlyUsable' => $this->onlyUsable,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
