<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationProjectFinalCheckOutput
{
    public function __construct(
        public readonly ?string $idMistake = null,
        public readonly ?string $checkName = null,
        public readonly ?string $help = null,
        public readonly ?string $helpConstant = null,
        public readonly ?bool $isValid = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idMistake: isset($obj->{'ID_Mistake'}) ? (string) $obj->{'ID_Mistake'} : null,
            checkName: isset($obj->{'CheckName'}) ? (string) $obj->{'CheckName'} : null,
            help: isset($obj->{'Help'}) ? (string) $obj->{'Help'} : null,
            helpConstant: isset($obj->{'HelpConstant'}) ? (string) $obj->{'HelpConstant'} : null,
            isValid: isset($obj->{'IsValid'}) ? (bool) $obj->{'IsValid'} : null,
        );
    }
}
