<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationAllPublicApiOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventEducation = null,
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
        public readonly ?int $idDocumentLogo = null,
        public readonly ?int $length = null,
        public readonly ?int $idOccupancy = null,
        public readonly ?string $occupancy = null,
        public readonly ?string $occupancyKey = null,
        public readonly ?bool $isForester = null,
        public readonly ?bool $isChildFriendly = null,
        public readonly ?bool $isAgeRestricted = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventEducation: isset($obj->{'ID_EventEducation'}) ? (int) $obj->{'ID_EventEducation'} : null,
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
            idDocumentLogo: isset($obj->{'ID_DocumentLogo'}) ? (int) $obj->{'ID_DocumentLogo'} : null,
            length: isset($obj->{'Length'}) ? (int) $obj->{'Length'} : null,
            idOccupancy: isset($obj->{'ID_Occupancy'}) ? (int) $obj->{'ID_Occupancy'} : null,
            occupancy: isset($obj->{'Occupancy'}) ? (string) $obj->{'Occupancy'} : null,
            occupancyKey: isset($obj->{'OccupancyKey'}) ? (string) $obj->{'OccupancyKey'} : null,
            isForester: isset($obj->{'IsForester'}) ? (bool) $obj->{'IsForester'} : null,
            isChildFriendly: isset($obj->{'IsChildFriendly'}) ? (bool) $obj->{'IsChildFriendly'} : null,
            isAgeRestricted: isset($obj->{'IsAgeRestricted'}) ? (bool) $obj->{'IsAgeRestricted'} : null,
        );
    }
}
