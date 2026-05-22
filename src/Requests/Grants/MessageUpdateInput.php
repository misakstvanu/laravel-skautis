<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class MessageUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $text = null,
        public readonly ?string $created = null,
        public readonly ?string $sent = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $grantCount = null,
        public readonly ?int $int = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'Text' => $this->text,
            'Created' => $this->created,
            'Sent' => $this->sent,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'GrantCount' => $this->grantCount,
            'int' => $this->int,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
