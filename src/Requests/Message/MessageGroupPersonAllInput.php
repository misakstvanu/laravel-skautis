<?php

namespace Misakstvanu\LaravelSkautis\Requests\Message;

final class MessageGroupPersonAllInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?int $idMessageGroup = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'ID_MessageGroup' => $this->idMessageGroup,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
