<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class CampLoginQuestionAllEventCampListInput
{
    public function __construct(
        public readonly ?int $idEventCamp = null,
        public readonly ?bool $addEmptyItem = null,
        public readonly ?bool $onlyBeforeDeadline = null,
        public readonly ?bool $addDeadlineToDisplayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCamp' => $this->idEventCamp,
            'AddEmptyItem' => $this->addEmptyItem,
            'OnlyBeforeDeadline' => $this->onlyBeforeDeadline,
            'AddDeadlineToDisplayName' => $this->addDeadlineToDisplayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
