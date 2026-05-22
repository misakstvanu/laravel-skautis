<?php

namespace Misakstvanu\LaravelSkautis\Requests\Insurance;

final class RegistrationInsertInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?string $note = null,
        public readonly ?int $int = null,
        public readonly ?int $year = null,
        public readonly ?bool $onlyValidate = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'Note' => $this->note,
            'int' => $this->int,
            'Year' => $this->year,
            'OnlyValidate' => $this->onlyValidate,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
