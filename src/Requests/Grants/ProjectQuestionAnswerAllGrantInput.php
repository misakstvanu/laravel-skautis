<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class ProjectQuestionAnswerAllGrantInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $accessKey = null,
        public readonly ?int $idGrant = null,
        public readonly ?bool $isEvaluation = null,
        public readonly ?int $year = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'AccessKey' => $this->accessKey,
            'ID_Grant' => $this->idGrant,
            'IsEvaluation' => $this->isEvaluation,
            'Year' => $this->year,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
