<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationTypeAllInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $id = null,
        public readonly ?string $idEventEducationGroup = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isQualificationExam = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            'ID_EventEducationGroup' => $this->idEventEducationGroup,
            'DisplayName' => $this->displayName,
            'IsQualificationExam' => $this->isQualificationExam,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
