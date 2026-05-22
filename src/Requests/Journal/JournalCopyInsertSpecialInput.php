<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class JournalCopyInsertSpecialInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?string $dateSent = null,
        public readonly ?string $note = null,
        public readonly ?bool $isInsert = null,
        public readonly ?int $int = null,
        public readonly ?bool $functionTypeNegation = null,
        public readonly ?bool $roverJournal = null,
        public readonly ?string $idSexUnit = null,
        public readonly ?bool $alignmentTypeNegation = null,
        public readonly ?string $string = null,
        public readonly ?int $ageFrom = null,
        public readonly ?int $ageTo = null,
        public readonly ?bool $hasPreparedJournal = null,
        public readonly ?bool $journalParent = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'DateSent' => $this->dateSent,
            'Note' => $this->note,
            'IsInsert' => $this->isInsert,
            'int' => $this->int,
            'FunctionTypeNegation' => $this->functionTypeNegation,
            'RoverJournal' => $this->roverJournal,
            'ID_SexUnit' => $this->idSexUnit,
            'AlignmentTypeNegation' => $this->alignmentTypeNegation,
            'string' => $this->string,
            'AgeFrom' => $this->ageFrom,
            'AgeTo' => $this->ageTo,
            'HasPreparedJournal' => $this->hasPreparedJournal,
            'JournalParent' => $this->journalParent,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
