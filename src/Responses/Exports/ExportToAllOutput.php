<?php

namespace Misakstvanu\LaravelSkautis\Responses\Exports;

final class ExportToAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idExport = null,
        public readonly ?string $email = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idExport: isset($obj->{'ID_Export'}) ? (int) $obj->{'ID_Export'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
        );
    }
}
