<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonAllEventEducationApiInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $idEventEducation = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID_EventEducation' => $this->idEventEducation,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
