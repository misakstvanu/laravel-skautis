<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantReportHadquartersBuildingOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $unit = null,
        public readonly ?string $unitLeader = null,
        public readonly ?string $unitLeaderEmail = null,
        public readonly ?string $unitLeaderPhone = null,
        public readonly ?string $projectLeader = null,
        public readonly ?string $projectLeaderEmail = null,
        public readonly ?string $projectLeaderPhone = null,
        public readonly ?string $ownerBuilding = null,
        public readonly ?string $ownerParcel = null,
        public readonly ?string $headquartersNote = null,
        public readonly ?string $note = null,
        public readonly ?string $condition = null,
        public readonly ?float $grantCostRatio = null,
        public readonly ?string $approvedDate = null,
        public readonly ?float $realAmount = null,
        public readonly ?float $amount = null,
        public readonly ?float $grantUsed = null,
        public readonly ?float $costs = null,
        public readonly ?int $participantsCount = null,
        public readonly ?int $projectsCount = null,
        public readonly ?string $idGrantState = null,
        public readonly ?string $grantState = null,
        public readonly ?string $code = null,
        public readonly ?string $displayName = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            unitLeader: isset($obj->{'UnitLeader'}) ? (string) $obj->{'UnitLeader'} : null,
            unitLeaderEmail: isset($obj->{'UnitLeaderEmail'}) ? (string) $obj->{'UnitLeaderEmail'} : null,
            unitLeaderPhone: isset($obj->{'UnitLeaderPhone'}) ? (string) $obj->{'UnitLeaderPhone'} : null,
            projectLeader: isset($obj->{'ProjectLeader'}) ? (string) $obj->{'ProjectLeader'} : null,
            projectLeaderEmail: isset($obj->{'ProjectLeaderEmail'}) ? (string) $obj->{'ProjectLeaderEmail'} : null,
            projectLeaderPhone: isset($obj->{'ProjectLeaderPhone'}) ? (string) $obj->{'ProjectLeaderPhone'} : null,
            ownerBuilding: isset($obj->{'OwnerBuilding'}) ? (string) $obj->{'OwnerBuilding'} : null,
            ownerParcel: isset($obj->{'OwnerParcel'}) ? (string) $obj->{'OwnerParcel'} : null,
            headquartersNote: isset($obj->{'HeadquartersNote'}) ? (string) $obj->{'HeadquartersNote'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            condition: isset($obj->{'Condition'}) ? (string) $obj->{'Condition'} : null,
            grantCostRatio: isset($obj->{'GrantCostRatio'}) ? (float) $obj->{'GrantCostRatio'} : null,
            approvedDate: isset($obj->{'ApprovedDate'}) ? (string) $obj->{'ApprovedDate'} : null,
            realAmount: isset($obj->{'RealAmount'}) ? (float) $obj->{'RealAmount'} : null,
            amount: isset($obj->{'Amount'}) ? (float) $obj->{'Amount'} : null,
            grantUsed: isset($obj->{'GrantUsed'}) ? (float) $obj->{'GrantUsed'} : null,
            costs: isset($obj->{'Costs'}) ? (float) $obj->{'Costs'} : null,
            participantsCount: isset($obj->{'ParticipantsCount'}) ? (int) $obj->{'ParticipantsCount'} : null,
            projectsCount: isset($obj->{'ProjectsCount'}) ? (int) $obj->{'ProjectsCount'} : null,
            idGrantState: isset($obj->{'ID_GrantState'}) ? (string) $obj->{'ID_GrantState'} : null,
            grantState: isset($obj->{'GrantState'}) ? (string) $obj->{'GrantState'} : null,
            code: isset($obj->{'Code'}) ? (string) $obj->{'Code'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
        );
    }
}
