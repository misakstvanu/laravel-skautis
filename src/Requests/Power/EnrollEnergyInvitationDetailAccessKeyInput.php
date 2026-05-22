<?php

namespace Misakstvanu\LaravelSkautis\Requests\Power;

final class EnrollEnergyInvitationDetailAccessKeyInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $accessKey = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'AccessKey' => $this->accessKey,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
