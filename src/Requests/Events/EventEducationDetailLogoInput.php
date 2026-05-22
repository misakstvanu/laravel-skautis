<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationDetailLogoInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $id = null,
        public readonly ?string $size = null,
        public readonly ?bool $returnImageData = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            'Size' => $this->size,
            'ReturnImageData' => $this->returnImageData,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
