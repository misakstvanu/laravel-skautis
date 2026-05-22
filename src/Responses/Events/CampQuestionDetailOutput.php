<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class CampQuestionDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $description = null,
        public readonly ?bool $isMultipleAnswer = null,
        public readonly ?bool $isFreeAnswer = null,
        public readonly ?int $order = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            isMultipleAnswer: isset($obj->{'IsMultipleAnswer'}) ? (bool) $obj->{'IsMultipleAnswer'} : null,
            isFreeAnswer: isset($obj->{'IsFreeAnswer'}) ? (bool) $obj->{'IsFreeAnswer'} : null,
            order: isset($obj->{'Order'}) ? (int) $obj->{'Order'} : null,
        );
    }
}
