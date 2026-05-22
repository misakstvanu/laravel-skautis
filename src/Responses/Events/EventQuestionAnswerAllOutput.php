<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventQuestionAnswerAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventQuestion = null,
        public readonly ?string $value = null,
        public readonly ?int $idDocument = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventQuestion: isset($obj->{'ID_EventQuestion'}) ? (int) $obj->{'ID_EventQuestion'} : null,
            value: isset($obj->{'Value'}) ? (string) $obj->{'Value'} : null,
            idDocument: isset($obj->{'ID_Document'}) ? (int) $obj->{'ID_Document'} : null,
        );
    }
}
