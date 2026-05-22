<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationOtherIllustrativePhotoInsertOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventEducationOther = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventEducationOther: isset($obj->{'ID_EventEducationOther'}) ? (int) $obj->{'ID_EventEducationOther'} : null,
        );
    }
}
