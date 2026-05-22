<?php

namespace Misakstvanu\LaravelSkautis\Responses\Welcome;

final class StripeAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idWelcome = null,
        public readonly ?string $welcome = null,
        public readonly ?string $displayName = null,
        public readonly ?int $order = null,
        public readonly ?string $text = null,
        public readonly ?string $idSex = null,
        public readonly ?string $sex = null,
        public readonly ?bool $isNew = null,
        public readonly ?int $idAlignmentType = null,
        public readonly ?string $alignmentType = null,
        public readonly ?bool $isWarning = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idWelcome: isset($obj->{'ID_Welcome'}) ? (int) $obj->{'ID_Welcome'} : null,
            welcome: isset($obj->{'Welcome'}) ? (string) $obj->{'Welcome'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            order: isset($obj->{'Order'}) ? (int) $obj->{'Order'} : null,
            text: isset($obj->{'Text'}) ? (string) $obj->{'Text'} : null,
            idSex: isset($obj->{'ID_Sex'}) ? (string) $obj->{'ID_Sex'} : null,
            sex: isset($obj->{'Sex'}) ? (string) $obj->{'Sex'} : null,
            isNew: isset($obj->{'IsNew'}) ? (bool) $obj->{'IsNew'} : null,
            idAlignmentType: isset($obj->{'ID_AlignmentType'}) ? (int) $obj->{'ID_AlignmentType'} : null,
            alignmentType: isset($obj->{'AlignmentType'}) ? (string) $obj->{'AlignmentType'} : null,
            isWarning: isset($obj->{'IsWarning'}) ? (bool) $obj->{'IsWarning'} : null,
        );
    }
}
