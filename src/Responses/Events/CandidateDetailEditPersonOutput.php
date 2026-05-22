<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class CandidateDetailEditPersonOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idContactType = null,
        public readonly ?string $contactType = null,
        public readonly ?bool $isMain = null,
        public readonly ?string $value = null,
        public readonly ?string $note = null,
        public readonly ?bool $isUsed = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $functionType = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?string $displayName = null,
        public readonly ?int $yearFrom = null,
        public readonly ?string $qualificationType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idContactType: isset($obj->{'ID_ContactType'}) ? (string) $obj->{'ID_ContactType'} : null,
            contactType: isset($obj->{'ContactType'}) ? (string) $obj->{'ContactType'} : null,
            isMain: isset($obj->{'IsMain'}) ? (bool) $obj->{'IsMain'} : null,
            value: isset($obj->{'Value'}) ? (string) $obj->{'Value'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            isUsed: isset($obj->{'IsUsed'}) ? (bool) $obj->{'IsUsed'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            functionType: isset($obj->{'FunctionType'}) ? (string) $obj->{'FunctionType'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            yearFrom: isset($obj->{'YearFrom'}) ? (int) $obj->{'YearFrom'} : null,
            qualificationType: isset($obj->{'QualificationType'}) ? (string) $obj->{'QualificationType'} : null,
        );
    }
}
