<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonHonourDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
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

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idHonour: isset($obj->{'ID_Honour'}) ? (int) $obj->{'ID_Honour'} : null,
            honour: isset($obj->{'Honour'}) ? (string) $obj->{'Honour'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            suggester: isset($obj->{'Suggester'}) ? (string) $obj->{'Suggester'} : null,
            idPersonSuggester: isset($obj->{'ID_PersonSuggester'}) ? (int) $obj->{'ID_PersonSuggester'} : null,
            idUnitSuggester: isset($obj->{'ID_UnitSuggester'}) ? (int) $obj->{'ID_UnitSuggester'} : null,
            suggesterDisplayName: isset($obj->{'SuggesterDisplayName'}) ? (string) $obj->{'SuggesterDisplayName'} : null,
            letterNumber: isset($obj->{'LetterNumber'}) ? (string) $obj->{'LetterNumber'} : null,
            inMemorian: isset($obj->{'InMemorian'}) ? (bool) $obj->{'InMemorian'} : null,
            reason: isset($obj->{'Reason'}) ? (string) $obj->{'Reason'} : null,
            fileName: isset($obj->{'FileName'}) ? (string) $obj->{'FileName'} : null,
            fileContent: isset($obj->{'FileContent'}) ? (string) $obj->{'FileContent'} : null,
            identificationCode: isset($obj->{'IdentificationCode'}) ? (string) $obj->{'IdentificationCode'} : null,
            identificationCodeSuggester: isset($obj->{'IdentificationCodeSuggester'}) ? (string) $obj->{'IdentificationCodeSuggester'} : null,
        );
    }
}
