<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class CampAnswerAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idCampQuestion = null,
        public readonly ?string $campQuestion = null,
        public readonly ?string $description = null,
        public readonly ?int $order = null,
        public readonly ?bool $selected = null,
        public readonly ?string $freeAnswer = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idCampQuestion: isset($obj->{'ID_CampQuestion'}) ? (int) $obj->{'ID_CampQuestion'} : null,
            campQuestion: isset($obj->{'CampQuestion'}) ? (string) $obj->{'CampQuestion'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            order: isset($obj->{'Order'}) ? (int) $obj->{'Order'} : null,
            selected: isset($obj->{'Selected'}) ? (bool) $obj->{'Selected'} : null,
            freeAnswer: isset($obj->{'FreeAnswer'}) ? (string) $obj->{'FreeAnswer'} : null,
        );
    }
}
