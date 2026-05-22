<?php

namespace Misakstvanu\LaravelSkautis\Responses\Message;

final class MessageMediumPersonAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idMessageMedium = null,
        public readonly ?string $messageMedium = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?bool $allGroups = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idMessageMedium: isset($obj->{'ID_MessageMedium'}) ? (string) $obj->{'ID_MessageMedium'} : null,
            messageMedium: isset($obj->{'MessageMedium'}) ? (string) $obj->{'MessageMedium'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            allGroups: isset($obj->{'AllGroups'}) ? (bool) $obj->{'AllGroups'} : null,
        );
    }
}
