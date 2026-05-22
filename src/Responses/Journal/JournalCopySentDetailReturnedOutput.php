<?php

namespace Misakstvanu\LaravelSkautis\Responses\Journal;

final class JournalCopySentDetailReturnedOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?bool $isReturned = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            isReturned: isset($obj->{'IsReturned'}) ? (bool) $obj->{'IsReturned'} : null,
        );
    }
}
