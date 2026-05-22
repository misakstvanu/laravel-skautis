<?php

namespace Misakstvanu\LaravelSkautis\Requests\Power;

final class EnrollEnergyDownloadInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $type = null,
        public readonly ?string $idApplication = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'Type' => $this->type,
            'ID_Application' => $this->idApplication,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
