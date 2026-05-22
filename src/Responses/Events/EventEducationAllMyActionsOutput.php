<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationAllMyActionsOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEvent = null,
        public readonly ?string $logoFileName = null,
        public readonly ?int $idDocumentLogo = null,
        public readonly ?int $idDocumentLogoPreview = null,
        public readonly ?int $idDocumentLogoMiniature = null,
        public readonly ?string $startDate = null,
        public readonly ?string $endDate = null,
        public readonly ?int $idEventEducationCourse = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?string $eventEducationType = null,
        public readonly ?string $displayName = null,
        public readonly ?string $displayNameCombined = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $unitFullName = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $idRelationType = null,
        public readonly ?string $relationType = null,
        public readonly ?bool $loginSkautis = null,
        public readonly ?string $loginFrom = null,
        public readonly ?string $loginTo = null,
        public readonly ?int $capacityCourse = null,
        public readonly ?int $capacitySubstitute = null,
        public readonly ?bool $canLogin = null,
        public readonly ?int $idParticipantEducation = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEvent: isset($obj->{'ID_Event'}) ? (int) $obj->{'ID_Event'} : null,
            logoFileName: isset($obj->{'LogoFileName'}) ? (string) $obj->{'LogoFileName'} : null,
            idDocumentLogo: isset($obj->{'ID_DocumentLogo'}) ? (int) $obj->{'ID_DocumentLogo'} : null,
            idDocumentLogoPreview: isset($obj->{'ID_DocumentLogoPreview'}) ? (int) $obj->{'ID_DocumentLogoPreview'} : null,
            idDocumentLogoMiniature: isset($obj->{'ID_DocumentLogoMiniature'}) ? (int) $obj->{'ID_DocumentLogoMiniature'} : null,
            startDate: isset($obj->{'StartDate'}) ? (string) $obj->{'StartDate'} : null,
            endDate: isset($obj->{'EndDate'}) ? (string) $obj->{'EndDate'} : null,
            idEventEducationCourse: isset($obj->{'ID_EventEducationCourse'}) ? (int) $obj->{'ID_EventEducationCourse'} : null,
            idEventEducationType: isset($obj->{'ID_EventEducationType'}) ? (int) $obj->{'ID_EventEducationType'} : null,
            eventEducationType: isset($obj->{'EventEducationType'}) ? (string) $obj->{'EventEducationType'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            displayNameCombined: isset($obj->{'DisplayNameCombined'}) ? (string) $obj->{'DisplayNameCombined'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            unitFullName: isset($obj->{'UnitFullName'}) ? (string) $obj->{'UnitFullName'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idRelationType: isset($obj->{'ID_RelationType'}) ? (string) $obj->{'ID_RelationType'} : null,
            relationType: isset($obj->{'RelationType'}) ? (string) $obj->{'RelationType'} : null,
            loginSkautis: isset($obj->{'LoginSkautis'}) ? (bool) $obj->{'LoginSkautis'} : null,
            loginFrom: isset($obj->{'LoginFrom'}) ? (string) $obj->{'LoginFrom'} : null,
            loginTo: isset($obj->{'LoginTo'}) ? (string) $obj->{'LoginTo'} : null,
            capacityCourse: isset($obj->{'CapacityCourse'}) ? (int) $obj->{'CapacityCourse'} : null,
            capacitySubstitute: isset($obj->{'CapacitySubstitute'}) ? (int) $obj->{'CapacitySubstitute'} : null,
            canLogin: isset($obj->{'CanLogin'}) ? (bool) $obj->{'CanLogin'} : null,
            idParticipantEducation: isset($obj->{'ID_ParticipantEducation'}) ? (int) $obj->{'ID_ParticipantEducation'} : null,
        );
    }
}
