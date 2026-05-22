<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCampEnrollUpdateAccessKeyAcceptInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $id = null,
        public readonly ?string $accessKey = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            'AccessKey' => $this->accessKey,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
