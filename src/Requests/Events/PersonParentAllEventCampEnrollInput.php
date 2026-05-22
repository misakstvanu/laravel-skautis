<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class PersonParentAllEventCampEnrollInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $accessKey = null,
        public readonly ?int $idEventCampEnroll = null,
        public readonly ?bool $isNameStrong = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'AccessKey' => $this->accessKey,
            'ID_EventCampEnroll' => $this->idEventCampEnroll,
            'IsNameStrong' => $this->isNameStrong,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
