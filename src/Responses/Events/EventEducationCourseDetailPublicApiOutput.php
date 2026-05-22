<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationCourseDetailPublicApiOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idEventEducationOther = null,
        public readonly ?string $displayName = null,
        public readonly ?string $loginFrom = null,
        public readonly ?string $loginTo = null,
        public readonly ?bool $loginSkautis = null,
        public readonly ?string $loginLocation = null,
        public readonly ?string $web = null,
        public readonly ?string $shortDescription = null,
        public readonly ?string $from = null,
        public readonly ?string $to = null,
        public readonly ?int $capacity = null,
        public readonly ?int $capacitySubstitute = null,
        public readonly ?int $capacityFilled = null,
        public readonly ?int $length = null,
        public readonly ?int $idOccupancy = null,
        public readonly ?string $occupancy = null,
        public readonly ?string $occupancyKey = null,
        public readonly ?int $idDocumentLogo = null,
        public readonly ?bool $isForester = null,
        public readonly ?bool $isChildFriendly = null,
        public readonly ?bool $isAgeRestricted = null,
        public readonly ?string $annotation = null,
        public readonly ?string $entryConditions = null,
        public readonly ?string $graduateConditions = null,
        public readonly ?float $participantFee = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?string $eventEducationType = null,
        public readonly ?string $phoneContact = null,
        public readonly ?string $emailContact = null,
        public readonly ?string $photoGallery = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventEducation: isset($obj->{'ID_EventEducation'}) ? (int) $obj->{'ID_EventEducation'} : null,
            idEventEducationOther: isset($obj->{'ID_EventEducationOther'}) ? (int) $obj->{'ID_EventEducationOther'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            loginFrom: isset($obj->{'LoginFrom'}) ? (string) $obj->{'LoginFrom'} : null,
            loginTo: isset($obj->{'LoginTo'}) ? (string) $obj->{'LoginTo'} : null,
            loginSkautis: isset($obj->{'LoginSkautis'}) ? (bool) $obj->{'LoginSkautis'} : null,
            loginLocation: isset($obj->{'LoginLocation'}) ? (string) $obj->{'LoginLocation'} : null,
            web: isset($obj->{'Web'}) ? (string) $obj->{'Web'} : null,
            shortDescription: isset($obj->{'ShortDescription'}) ? (string) $obj->{'ShortDescription'} : null,
            from: isset($obj->{'From'}) ? (string) $obj->{'From'} : null,
            to: isset($obj->{'To'}) ? (string) $obj->{'To'} : null,
            capacity: isset($obj->{'Capacity'}) ? (int) $obj->{'Capacity'} : null,
            capacitySubstitute: isset($obj->{'CapacitySubstitute'}) ? (int) $obj->{'CapacitySubstitute'} : null,
            capacityFilled: isset($obj->{'CapacityFilled'}) ? (int) $obj->{'CapacityFilled'} : null,
            length: isset($obj->{'Length'}) ? (int) $obj->{'Length'} : null,
            idOccupancy: isset($obj->{'ID_Occupancy'}) ? (int) $obj->{'ID_Occupancy'} : null,
            occupancy: isset($obj->{'Occupancy'}) ? (string) $obj->{'Occupancy'} : null,
            occupancyKey: isset($obj->{'OccupancyKey'}) ? (string) $obj->{'OccupancyKey'} : null,
            idDocumentLogo: isset($obj->{'ID_DocumentLogo'}) ? (int) $obj->{'ID_DocumentLogo'} : null,
            isForester: isset($obj->{'IsForester'}) ? (bool) $obj->{'IsForester'} : null,
            isChildFriendly: isset($obj->{'IsChildFriendly'}) ? (bool) $obj->{'IsChildFriendly'} : null,
            isAgeRestricted: isset($obj->{'IsAgeRestricted'}) ? (bool) $obj->{'IsAgeRestricted'} : null,
            annotation: isset($obj->{'Annotation'}) ? (string) $obj->{'Annotation'} : null,
            entryConditions: isset($obj->{'EntryConditions'}) ? (string) $obj->{'EntryConditions'} : null,
            graduateConditions: isset($obj->{'GraduateConditions'}) ? (string) $obj->{'GraduateConditions'} : null,
            participantFee: isset($obj->{'ParticipantFee'}) ? (float) $obj->{'ParticipantFee'} : null,
            idEventEducationType: isset($obj->{'ID_EventEducationType'}) ? (int) $obj->{'ID_EventEducationType'} : null,
            eventEducationType: isset($obj->{'EventEducationType'}) ? (string) $obj->{'EventEducationType'} : null,
            phoneContact: isset($obj->{'PhoneContact'}) ? (string) $obj->{'PhoneContact'} : null,
            emailContact: isset($obj->{'EmailContact'}) ? (string) $obj->{'EmailContact'} : null,
            photoGallery: isset($obj->{'PhotoGallery'}) ? (string) $obj->{'PhotoGallery'} : null,
        );
    }
}
