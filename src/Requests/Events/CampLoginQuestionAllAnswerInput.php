<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class CampLoginQuestionAllAnswerInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $accessKey = null,
        public readonly ?int $idEventCampEnroll = null,
        public readonly ?int $idEventCamp = null,
        public readonly ?int $idCampOnlineLogin = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'AccessKey' => $this->accessKey,
            'ID_EventCampEnroll' => $this->idEventCampEnroll,
            'ID_EventCamp' => $this->idEventCamp,
            'ID_CampOnlineLogin' => $this->idCampOnlineLogin,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
