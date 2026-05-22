<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationAllPublicHistoryApiOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?string $displayName = null,
        public readonly ?string $shortDescription = null,
        public readonly ?int $nextOccurrenceYear = null,
        public readonly ?string $web = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventEducation: isset($obj->{'ID_EventEducation'}) ? (int) $obj->{'ID_EventEducation'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            shortDescription: isset($obj->{'ShortDescription'}) ? (string) $obj->{'ShortDescription'} : null,
            nextOccurrenceYear: isset($obj->{'NextOccurrenceYear'}) ? (int) $obj->{'NextOccurrenceYear'} : null,
            web: isset($obj->{'Web'}) ? (string) $obj->{'Web'} : null,
        );
    }
}
