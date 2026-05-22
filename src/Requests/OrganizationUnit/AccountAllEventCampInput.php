<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class AccountAllEventCampInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $idEventCamp = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID_EventCamp' => $this->idEventCamp,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
