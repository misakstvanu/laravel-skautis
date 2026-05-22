<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationExamCheckPersonOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $civilName = null,
        public readonly ?string $displayName = null,
        public readonly ?string $note = null,
        public readonly ?int $idEventEducationExamException = null,
        public readonly ?string $warning = null,
        public readonly ?string $error = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            civilName: isset($obj->{'CivilName'}) ? (string) $obj->{'CivilName'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            idEventEducationExamException: isset($obj->{'ID_EventEducationExamException'}) ? (int) $obj->{'ID_EventEducationExamException'} : null,
            warning: isset($obj->{'Warning'}) ? (string) $obj->{'Warning'} : null,
            error: isset($obj->{'Error'}) ? (string) $obj->{'Error'} : null,
        );
    }
}
