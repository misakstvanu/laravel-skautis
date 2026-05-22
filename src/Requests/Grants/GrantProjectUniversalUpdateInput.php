<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantProjectUniversalUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?int $idGrant = null,
        public readonly ?string $goal = null,
        public readonly ?string $projectCharacteristic = null,
        public readonly ?string $description = null,
        public readonly ?string $information = null,
        public readonly ?string $targetGroup = null,
        public readonly ?bool $hasCustomQuestions = null,
        public readonly mixed $projectQuestion = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_User' => $this->idUser,
            'ID_Grant' => $this->idGrant,
            'Goal' => $this->goal,
            'ProjectCharacteristic' => $this->projectCharacteristic,
            'Description' => $this->description,
            'Information' => $this->information,
            'TargetGroup' => $this->targetGroup,
            'HasCustomQuestions' => $this->hasCustomQuestions,
            'ProjectQuestion' => $this->projectQuestion,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
