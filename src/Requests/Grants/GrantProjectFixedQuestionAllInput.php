<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantProjectFixedQuestionAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idProjectQuestionType = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idGrantType = null,
        public readonly ?string $idProjectQuestionRequirement = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_ProjectQuestionType' => $this->idProjectQuestionType,
            'DisplayName' => $this->displayName,
            'ID_GrantType' => $this->idGrantType,
            'ID_ProjectQuestionRequirement' => $this->idProjectQuestionRequirement,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
