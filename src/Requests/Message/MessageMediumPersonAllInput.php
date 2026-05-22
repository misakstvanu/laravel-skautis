<?php

namespace Misakstvanu\LaravelSkautis\Requests\Message;

final class MessageMediumPersonAllInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?string $idMessageMedium = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'ID_MessageMedium' => $this->idMessageMedium,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
