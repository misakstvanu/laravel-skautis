<?php

namespace Misakstvanu\LaravelSkautis\Requests\Power;

final class EnrollEnergyCandidateInsertInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $email = null,
        public readonly ?string $personalText = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'Email' => $this->email,
            'PersonalText' => $this->personalText,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
