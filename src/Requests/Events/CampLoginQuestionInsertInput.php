<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class CampLoginQuestionInsertInput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $idLoginQuestionType = null,
        public readonly ?string $loginQuestionType = null,
        public readonly ?int $idEventCamp = null,
        public readonly ?int $idCampOnlineLogin = null,
        public readonly ?string $campOnlineLogin = null,
        public readonly ?int $idCampLoginQuestionGroup = null,
        public readonly ?string $campLoginQuestionGroup = null,
        public readonly ?string $displayName = null,
        public readonly ?string $rawText = null,
        public readonly ?string $help = null,
        public readonly ?string $helpRaw = null,
        public readonly ?string $note = null,
        public readonly ?string $idLoginQuestionRequirement = null,
        public readonly ?string $loginQuestionRequirement = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_LoginQuestionType' => $this->idLoginQuestionType,
            'LoginQuestionType' => $this->loginQuestionType,
            'ID_EventCamp' => $this->idEventCamp,
            'ID_CampOnlineLogin' => $this->idCampOnlineLogin,
            'CampOnlineLogin' => $this->campOnlineLogin,
            'ID_CampLoginQuestionGroup' => $this->idCampLoginQuestionGroup,
            'CampLoginQuestionGroup' => $this->campLoginQuestionGroup,
            'DisplayName' => $this->displayName,
            'RawText' => $this->rawText,
            'Help' => $this->help,
            'HelpRaw' => $this->helpRaw,
            'Note' => $this->note,
            'ID_LoginQuestionRequirement' => $this->idLoginQuestionRequirement,
            'LoginQuestionRequirement' => $this->loginQuestionRequirement,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
