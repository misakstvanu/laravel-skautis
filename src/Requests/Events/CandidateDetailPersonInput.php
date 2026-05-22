<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class CandidateDetailPersonInput
{
    public function __construct(
        public readonly ?string $size = null,
        public readonly ?int $id = null,
        public readonly ?int $idEventCongressFunction = null,
        public readonly ?int $idPerson = null,
        public readonly ?bool $returnPhoto = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Size' => $this->size,
            'ID' => $this->id,
            'ID_EventCongressFunction' => $this->idEventCongressFunction,
            'ID_Person' => $this->idPerson,
            'ReturnPhoto' => $this->returnPhoto,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
