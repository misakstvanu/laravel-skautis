<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonHonourAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idHonour = null,
        public readonly ?string $honour = null,
        public readonly ?string $description = null,
        public readonly ?string $stateUrl = null,
        public readonly ?string $descriptionUrl = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?string $suggester = null,
        public readonly ?string $letterNumber = null,
        public readonly ?bool $inMemorian = null,
        public readonly ?string $reason = null,
        public readonly ?string $fileName = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idHonour: isset($obj->{'ID_Honour'}) ? (int) $obj->{'ID_Honour'} : null,
            honour: isset($obj->{'Honour'}) ? (string) $obj->{'Honour'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            stateUrl: isset($obj->{'StateUrl'}) ? (string) $obj->{'StateUrl'} : null,
            descriptionUrl: isset($obj->{'DescriptionUrl'}) ? (string) $obj->{'DescriptionUrl'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            suggester: isset($obj->{'Suggester'}) ? (string) $obj->{'Suggester'} : null,
            letterNumber: isset($obj->{'LetterNumber'}) ? (string) $obj->{'LetterNumber'} : null,
            inMemorian: isset($obj->{'InMemorian'}) ? (bool) $obj->{'InMemorian'} : null,
            reason: isset($obj->{'Reason'}) ? (string) $obj->{'Reason'} : null,
            fileName: isset($obj->{'FileName'}) ? (string) $obj->{'FileName'} : null,
        );
    }
}
