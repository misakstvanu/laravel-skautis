<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEvent = null,
        public readonly ?string $event = null,
        public readonly ?string $idGrantType = null,
        public readonly ?string $grantType = null,
        public readonly ?string $code = null,
        public readonly ?int $sequence = null,
        public readonly ?int $revision = null,
        public readonly ?string $idGrantAdvanceType = null,
        public readonly ?string $grantAdvanceType = null,
        public readonly ?string $committeeNote = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $grantAdvanceNote = null,
        public readonly ?string $idGrantState = null,
        public readonly ?string $grantState = null,
        public readonly ?float $amount = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEvent: isset($obj->{'ID_Event'}) ? (int) $obj->{'ID_Event'} : null,
            event: isset($obj->{'Event'}) ? (string) $obj->{'Event'} : null,
            idGrantType: isset($obj->{'ID_GrantType'}) ? (string) $obj->{'ID_GrantType'} : null,
            grantType: isset($obj->{'GrantType'}) ? (string) $obj->{'GrantType'} : null,
            code: isset($obj->{'Code'}) ? (string) $obj->{'Code'} : null,
            sequence: isset($obj->{'Sequence'}) ? (int) $obj->{'Sequence'} : null,
            revision: isset($obj->{'Revision'}) ? (int) $obj->{'Revision'} : null,
            idGrantAdvanceType: isset($obj->{'ID_GrantAdvanceType'}) ? (string) $obj->{'ID_GrantAdvanceType'} : null,
            grantAdvanceType: isset($obj->{'GrantAdvanceType'}) ? (string) $obj->{'GrantAdvanceType'} : null,
            committeeNote: isset($obj->{'CommitteeNote'}) ? (string) $obj->{'CommitteeNote'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            grantAdvanceNote: isset($obj->{'GrantAdvanceNote'}) ? (string) $obj->{'GrantAdvanceNote'} : null,
            idGrantState: isset($obj->{'ID_GrantState'}) ? (string) $obj->{'ID_GrantState'} : null,
            grantState: isset($obj->{'GrantState'}) ? (string) $obj->{'GrantState'} : null,
            amount: isset($obj->{'Amount'}) ? (float) $obj->{'Amount'} : null,
        );
    }
}
