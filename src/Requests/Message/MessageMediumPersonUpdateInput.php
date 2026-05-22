<?php

namespace Misakstvanu\LaravelSkautis\Requests\Message;

final class MessageMediumPersonUpdateInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?string $idMessageMedium = null,
        public readonly ?bool $subscribe = null,
        public readonly ?bool $allGroups = null,
        public readonly ?int $int = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'ID_MessageMedium' => $this->idMessageMedium,
            'Subscribe' => $this->subscribe,
            'AllGroups' => $this->allGroups,
            'int' => $this->int,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
