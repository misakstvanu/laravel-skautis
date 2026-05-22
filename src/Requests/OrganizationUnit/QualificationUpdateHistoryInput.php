<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class QualificationUpdateHistoryInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $id = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?int $idQualificationType = null,
        public readonly ?string $qualificationType = null,
        public readonly ?string $letterNumber = null,
        public readonly ?string $note = null,
        public readonly ?bool $isUsed = null,
        public readonly ?bool $sendMessage = null,
        public readonly ?int $idDocument = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'ID' => $this->id,
            'ValidFrom' => $this->validFrom,
            'ValidTo' => $this->validTo,
            'ID_QualificationType' => $this->idQualificationType,
            'QualificationType' => $this->qualificationType,
            'LetterNumber' => $this->letterNumber,
            'Note' => $this->note,
            'IsUsed' => $this->isUsed,
            'SendMessage' => $this->sendMessage,
            'ID_Document' => $this->idDocument,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
