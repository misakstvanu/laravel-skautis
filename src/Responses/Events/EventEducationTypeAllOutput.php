<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationTypeAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $isActive = null,
        public readonly ?string $idEventEducationGroup = null,
        public readonly ?string $eventEducationGroup = null,
        public readonly ?string $displayName = null,
        public readonly ?string $shortName = null,
        public readonly ?bool $isQualifyingExam = null,
        public readonly ?bool $isDecree = null,
        public readonly ?bool $isForester = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            idEventEducationGroup: isset($obj->{'ID_EventEducationGroup'}) ? (string) $obj->{'ID_EventEducationGroup'} : null,
            eventEducationGroup: isset($obj->{'EventEducationGroup'}) ? (string) $obj->{'EventEducationGroup'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            shortName: isset($obj->{'ShortName'}) ? (string) $obj->{'ShortName'} : null,
            isQualifyingExam: isset($obj->{'IsQualifyingExam'}) ? (bool) $obj->{'IsQualifyingExam'} : null,
            isDecree: isset($obj->{'IsDecree'}) ? (bool) $obj->{'IsDecree'} : null,
            isForester: isset($obj->{'IsForester'}) ? (bool) $obj->{'IsForester'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
