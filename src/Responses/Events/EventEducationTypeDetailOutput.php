<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationTypeDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?bool $isActive = null,
        public readonly ?string $number = null,
        public readonly ?string $idEventEducationGroup = null,
        public readonly ?string $eventEducationGroup = null,
        public readonly ?string $displayName = null,
        public readonly ?string $shortName = null,
        public readonly ?bool $isQualifyingExam = null,
        public readonly ?bool $isDecree = null,
        public readonly ?bool $isWaterman = null,
        public readonly ?bool $isSomeQualifiaction = null,
        public readonly ?bool $isGraduate = null,
        public readonly ?bool $isLimited = null,
        public readonly ?string $note = null,
        public readonly ?int $instructorPermanent = null,
        public readonly ?int $instructorMember = null,
        public readonly ?string $key = null,
        public readonly ?bool $isForester = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            number: isset($obj->{'Number'}) ? (string) $obj->{'Number'} : null,
            idEventEducationGroup: isset($obj->{'ID_EventEducationGroup'}) ? (string) $obj->{'ID_EventEducationGroup'} : null,
            eventEducationGroup: isset($obj->{'EventEducationGroup'}) ? (string) $obj->{'EventEducationGroup'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            shortName: isset($obj->{'ShortName'}) ? (string) $obj->{'ShortName'} : null,
            isQualifyingExam: isset($obj->{'IsQualifyingExam'}) ? (bool) $obj->{'IsQualifyingExam'} : null,
            isDecree: isset($obj->{'IsDecree'}) ? (bool) $obj->{'IsDecree'} : null,
            isWaterman: isset($obj->{'IsWaterman'}) ? (bool) $obj->{'IsWaterman'} : null,
            isSomeQualifiaction: isset($obj->{'IsSomeQualifiaction'}) ? (bool) $obj->{'IsSomeQualifiaction'} : null,
            isGraduate: isset($obj->{'IsGraduate'}) ? (bool) $obj->{'IsGraduate'} : null,
            isLimited: isset($obj->{'IsLimited'}) ? (bool) $obj->{'IsLimited'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            instructorPermanent: isset($obj->{'InstructorPermanent'}) ? (int) $obj->{'InstructorPermanent'} : null,
            instructorMember: isset($obj->{'InstructorMember'}) ? (int) $obj->{'InstructorMember'} : null,
            key: isset($obj->{'Key'}) ? (string) $obj->{'Key'} : null,
            isForester: isset($obj->{'IsForester'}) ? (bool) $obj->{'IsForester'} : null,
        );
    }
}
