<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class CandidateAllInput
{
    public function __construct(
        public readonly ?int $idEventCongress = null,
        public readonly ?string $idCandidateState = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $idCandidateWith = null,
        public readonly ?int $idEventCongressFunction = null,
        public readonly ?bool $isAudit = null,
        public readonly ?bool $isOther = null,
        public readonly ?bool $isDelegate = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCongress' => $this->idEventCongress,
            'ID_CandidateState' => $this->idCandidateState,
            'ID_Person' => $this->idPerson,
            'ID_CandidateWith' => $this->idCandidateWith,
            'ID_EventCongressFunction' => $this->idEventCongressFunction,
            'IsAudit' => $this->isAudit,
            'IsOther' => $this->isOther,
            'IsDelegate' => $this->isDelegate,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
