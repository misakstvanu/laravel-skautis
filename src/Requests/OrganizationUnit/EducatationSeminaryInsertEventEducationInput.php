<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class EducatationSeminaryInsertEventEducationInput
{
    public function __construct(
        public readonly ?int $idEventEducation = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventEducation' => $this->idEventEducation,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
