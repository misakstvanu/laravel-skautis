<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantCostEvidenceAllGrantOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $description = null,
        public readonly ?float $amount = null,
        public readonly ?float $grantAmount = null,
        public readonly ?string $evidenceExtension = null,
        public readonly ?string $note = null,
        public readonly ?int $idGrant = null,
        public readonly ?string $evidenceDate = null,
        public readonly ?int $year = null,
        public readonly ?int $idDocument = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            amount: isset($obj->{'Amount'}) ? (float) $obj->{'Amount'} : null,
            grantAmount: isset($obj->{'GrantAmount'}) ? (float) $obj->{'GrantAmount'} : null,
            evidenceExtension: isset($obj->{'EvidenceExtension'}) ? (string) $obj->{'EvidenceExtension'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            idGrant: isset($obj->{'ID_Grant'}) ? (int) $obj->{'ID_Grant'} : null,
            evidenceDate: isset($obj->{'EvidenceDate'}) ? (string) $obj->{'EvidenceDate'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            idDocument: isset($obj->{'ID_Document'}) ? (int) $obj->{'ID_Document'} : null,
        );
    }
}
