<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventConditionAllCheckOutput
{
    public function __construct(
        public readonly ?int $idEventEducation = null,
        public readonly ?string $eventEducation = null,
        public readonly ?string $idConditionType = null,
        public readonly ?string $conditionType = null,
        public readonly ?string $idConditionTypeMissing = null,
        public readonly ?string $conditionTypeMissing = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idEventEducation: isset($obj->{'ID_EventEducation'}) ? (int) $obj->{'ID_EventEducation'} : null,
            eventEducation: isset($obj->{'EventEducation'}) ? (string) $obj->{'EventEducation'} : null,
            idConditionType: isset($obj->{'ID_ConditionType'}) ? (string) $obj->{'ID_ConditionType'} : null,
            conditionType: isset($obj->{'ConditionType'}) ? (string) $obj->{'ConditionType'} : null,
            idConditionTypeMissing: isset($obj->{'ID_ConditionTypeMissing'}) ? (string) $obj->{'ID_ConditionTypeMissing'} : null,
            conditionTypeMissing: isset($obj->{'ConditionTypeMissing'}) ? (string) $obj->{'ConditionTypeMissing'} : null,
        );
    }
}
