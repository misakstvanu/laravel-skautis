<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonHonourUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idHonour = null,
        public readonly ?string $honour = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?string $suggester = null,
        public readonly ?int $idPersonSuggester = null,
        public readonly ?int $idUnitSuggester = null,
        public readonly ?string $suggesterDisplayName = null,
        public readonly ?string $letterNumber = null,
        public readonly ?bool $inMemorian = null,
        public readonly ?string $reason = null,
        public readonly ?string $fileName = null,
        public readonly ?string $fileContent = null,
        public readonly ?string $identificationCode = null,
        public readonly ?string $identificationCodeSuggester = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'ID_Honour' => $this->idHonour,
            'Honour' => $this->honour,
            'ValidFrom' => $this->validFrom,
            'ValidTo' => $this->validTo,
            'Suggester' => $this->suggester,
            'ID_PersonSuggester' => $this->idPersonSuggester,
            'ID_UnitSuggester' => $this->idUnitSuggester,
            'SuggesterDisplayName' => $this->suggesterDisplayName,
            'LetterNumber' => $this->letterNumber,
            'InMemorian' => $this->inMemorian,
            'Reason' => $this->reason,
            'FileName' => $this->fileName,
            'FileContent' => $this->fileContent,
            'IdentificationCode' => $this->identificationCode,
            'IdentificationCodeSuggester' => $this->identificationCodeSuggester,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
