<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationExamAllPublicApiOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idQualificationType = null,
        public readonly ?string $qualificationType = null,
        public readonly ?int $capacity = null,
        public readonly ?string $date = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idQualificationType: isset($obj->{'ID_QualificationType'}) ? (int) $obj->{'ID_QualificationType'} : null,
            qualificationType: isset($obj->{'QualificationType'}) ? (string) $obj->{'QualificationType'} : null,
            capacity: isset($obj->{'Capacity'}) ? (int) $obj->{'Capacity'} : null,
            date: isset($obj->{'Date'}) ? (string) $obj->{'Date'} : null,
        );
    }
}
