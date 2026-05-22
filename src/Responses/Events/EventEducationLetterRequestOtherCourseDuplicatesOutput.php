<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationLetterRequestOtherCourseDuplicatesOutput
{
    public function __construct(
        public readonly ?string $letterNumber = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            letterNumber: isset($obj->{'LetterNumber'}) ? (string) $obj->{'LetterNumber'} : null,
        );
    }
}
