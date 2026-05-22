<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationAllOverviewOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $firstTerm = null,
        public readonly ?string $terms = null,
        public readonly ?string $projectNote = null,
        public readonly ?string $approvalState = null,
        public readonly ?string $grantState = null,
        public readonly ?string $eventLeader = null,
        public readonly ?int $idEventLeader = null,
        public readonly ?string $leaderEmail = null,
        public readonly ?int $idEventEducationDisplayName = null,
        public readonly ?string $termsShort = null,
        public readonly ?bool $hasProject = null,
        public readonly ?bool $hasGrant = null,
        public readonly ?int $idGrant = null,
        public readonly ?bool $hasFinalReport = null,
        public readonly ?string $disapproveNote = null,
        public readonly ?string $dateChanged = null,
        public readonly ?int $idPersonDateChanged = null,
        public readonly ?string $personDateChanged = null,
        public readonly ?bool $isNeedProject = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            firstTerm: isset($obj->{'FirstTerm'}) ? (string) $obj->{'FirstTerm'} : null,
            terms: isset($obj->{'Terms'}) ? (string) $obj->{'Terms'} : null,
            projectNote: isset($obj->{'ProjectNote'}) ? (string) $obj->{'ProjectNote'} : null,
            approvalState: isset($obj->{'ApprovalState'}) ? (string) $obj->{'ApprovalState'} : null,
            grantState: isset($obj->{'GrantState'}) ? (string) $obj->{'GrantState'} : null,
            eventLeader: isset($obj->{'EventLeader'}) ? (string) $obj->{'EventLeader'} : null,
            idEventLeader: isset($obj->{'ID_EventLeader'}) ? (int) $obj->{'ID_EventLeader'} : null,
            leaderEmail: isset($obj->{'LeaderEmail'}) ? (string) $obj->{'LeaderEmail'} : null,
            idEventEducationDisplayName: isset($obj->{'ID_EventEducationDisplayName'}) ? (int) $obj->{'ID_EventEducationDisplayName'} : null,
            termsShort: isset($obj->{'TermsShort'}) ? (string) $obj->{'TermsShort'} : null,
            hasProject: isset($obj->{'HasProject'}) ? (bool) $obj->{'HasProject'} : null,
            hasGrant: isset($obj->{'HasGrant'}) ? (bool) $obj->{'HasGrant'} : null,
            idGrant: isset($obj->{'ID_Grant'}) ? (int) $obj->{'ID_Grant'} : null,
            hasFinalReport: isset($obj->{'HasFinalReport'}) ? (bool) $obj->{'HasFinalReport'} : null,
            disapproveNote: isset($obj->{'DisapproveNote'}) ? (string) $obj->{'DisapproveNote'} : null,
            dateChanged: isset($obj->{'DateChanged'}) ? (string) $obj->{'DateChanged'} : null,
            idPersonDateChanged: isset($obj->{'ID_PersonDateChanged'}) ? (int) $obj->{'ID_PersonDateChanged'} : null,
            personDateChanged: isset($obj->{'PersonDateChanged'}) ? (string) $obj->{'PersonDateChanged'} : null,
            isNeedProject: isset($obj->{'IsNeedProject'}) ? (bool) $obj->{'IsNeedProject'} : null,
        );
    }
}
