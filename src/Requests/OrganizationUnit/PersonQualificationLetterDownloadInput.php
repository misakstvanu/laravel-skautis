<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonQualificationLetterDownloadInput
{
    public function __construct(
        public readonly ?int $idQualification = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Qualification' => $this->idQualification,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
