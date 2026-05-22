<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonChangeInsertPersonChangeRequestPersonInput
{
    public function __construct(
        public readonly ?int $idPersonChangeRequestPerson = null,
        public readonly ?bool $sendMessage = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_PersonChangeRequestPerson' => $this->idPersonChangeRequestPerson,
            'SendMessage' => $this->sendMessage,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
