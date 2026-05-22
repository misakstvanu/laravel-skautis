<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventCongressAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEvent = null,
        public readonly ?string $event = null,
        public readonly ?string $promulgationDeadline = null,
        public readonly ?string $commissionDeadline = null,
        public readonly ?string $candidateDeadline = null,
        public readonly ?string $idEventCongressType = null,
        public readonly ?string $eventCongressType = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $startDate = null,
        public readonly ?string $endDate = null,
        public readonly ?float $gpsLatitude = null,
        public readonly ?float $gpsLongitude = null,
        public readonly ?string $location = null,
        public readonly ?string $alternateStartDate = null,
        public readonly ?string $alternateEndDate = null,
        public readonly ?float $alternateGpsLatitude = null,
        public readonly ?float $alternateGpsLongitude = null,
        public readonly ?string $alternateLocation = null,
        public readonly ?string $note = null,
        public readonly ?int $idUnitRegistration = null,
        public readonly ?int $year = null,
        public readonly ?string $eventCongressState = null,
        public readonly ?string $idEventCongressState = null,
        public readonly ?string $startEndDate = null,
        public readonly ?string $simplifiedEntryExtension = null,
        public readonly ?string $protocolExtension = null,
        public readonly ?int $idDocumentProtocol = null,
        public readonly ?int $idDocumentSimplifiedEntry = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEvent: isset($obj->{'ID_Event'}) ? (int) $obj->{'ID_Event'} : null,
            event: isset($obj->{'Event'}) ? (string) $obj->{'Event'} : null,
            promulgationDeadline: isset($obj->{'PromulgationDeadline'}) ? (string) $obj->{'PromulgationDeadline'} : null,
            commissionDeadline: isset($obj->{'CommissionDeadline'}) ? (string) $obj->{'CommissionDeadline'} : null,
            candidateDeadline: isset($obj->{'CandidateDeadline'}) ? (string) $obj->{'CandidateDeadline'} : null,
            idEventCongressType: isset($obj->{'ID_EventCongressType'}) ? (string) $obj->{'ID_EventCongressType'} : null,
            eventCongressType: isset($obj->{'EventCongressType'}) ? (string) $obj->{'EventCongressType'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            startDate: isset($obj->{'StartDate'}) ? (string) $obj->{'StartDate'} : null,
            endDate: isset($obj->{'EndDate'}) ? (string) $obj->{'EndDate'} : null,
            gpsLatitude: isset($obj->{'GpsLatitude'}) ? (float) $obj->{'GpsLatitude'} : null,
            gpsLongitude: isset($obj->{'GpsLongitude'}) ? (float) $obj->{'GpsLongitude'} : null,
            location: isset($obj->{'Location'}) ? (string) $obj->{'Location'} : null,
            alternateStartDate: isset($obj->{'AlternateStartDate'}) ? (string) $obj->{'AlternateStartDate'} : null,
            alternateEndDate: isset($obj->{'AlternateEndDate'}) ? (string) $obj->{'AlternateEndDate'} : null,
            alternateGpsLatitude: isset($obj->{'AlternateGpsLatitude'}) ? (float) $obj->{'AlternateGpsLatitude'} : null,
            alternateGpsLongitude: isset($obj->{'AlternateGpsLongitude'}) ? (float) $obj->{'AlternateGpsLongitude'} : null,
            alternateLocation: isset($obj->{'AlternateLocation'}) ? (string) $obj->{'AlternateLocation'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            idUnitRegistration: isset($obj->{'ID_UnitRegistration'}) ? (int) $obj->{'ID_UnitRegistration'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            eventCongressState: isset($obj->{'EventCongressState'}) ? (string) $obj->{'EventCongressState'} : null,
            idEventCongressState: isset($obj->{'ID_EventCongressState'}) ? (string) $obj->{'ID_EventCongressState'} : null,
            startEndDate: isset($obj->{'StartEndDate'}) ? (string) $obj->{'StartEndDate'} : null,
            simplifiedEntryExtension: isset($obj->{'SimplifiedEntryExtension'}) ? (string) $obj->{'SimplifiedEntryExtension'} : null,
            protocolExtension: isset($obj->{'ProtocolExtension'}) ? (string) $obj->{'ProtocolExtension'} : null,
            idDocumentProtocol: isset($obj->{'ID_DocumentProtocol'}) ? (int) $obj->{'ID_DocumentProtocol'} : null,
            idDocumentSimplifiedEntry: isset($obj->{'ID_DocumentSimplifiedEntry'}) ? (int) $obj->{'ID_DocumentSimplifiedEntry'} : null,
        );
    }
}
