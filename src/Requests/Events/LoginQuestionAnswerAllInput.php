<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class LoginQuestionAnswerAllInput
{
    public function __construct(
        public readonly ?int $idEventCampEnroll = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCampEnroll' => $this->idEventCampEnroll,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
