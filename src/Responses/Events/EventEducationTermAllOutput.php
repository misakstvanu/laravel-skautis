<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationTermAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $isActive = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idEventEducationLocation = null,
        public readonly ?string $eventEducationLocation = null,
        public readonly ?string $dateFrom = null,
        public readonly ?string $dateTo = null,
        public readonly ?string $note = null,
        public readonly ?bool $isRealParticipationSet = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idEventEducation: isset($obj->{'ID_EventEducation'}) ? (int) $obj->{'ID_EventEducation'} : null,
            idEventEducationLocation: isset($obj->{'ID_EventEducationLocation'}) ? (int) $obj->{'ID_EventEducationLocation'} : null,
            eventEducationLocation: isset($obj->{'EventEducationLocation'}) ? (string) $obj->{'EventEducationLocation'} : null,
            dateFrom: isset($obj->{'DateFrom'}) ? (string) $obj->{'DateFrom'} : null,
            dateTo: isset($obj->{'DateTo'}) ? (string) $obj->{'DateTo'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            isRealParticipationSet: isset($obj->{'IsRealParticipationSet'}) ? (bool) $obj->{'IsRealParticipationSet'} : null,
        );
    }
}
