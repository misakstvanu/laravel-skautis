<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class QualificationTypeAllInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?bool $isExam = null,
        public readonly ?bool $showManualIssue = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'IsExam' => $this->isExam,
            'ShowManualIssue' => $this->showManualIssue,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
