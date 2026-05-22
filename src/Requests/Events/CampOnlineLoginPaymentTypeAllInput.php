<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class CampOnlineLoginPaymentTypeAllInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
