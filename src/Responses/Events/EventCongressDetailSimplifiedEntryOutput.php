<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventCongressDetailSimplifiedEntryOutput
{
    public function __construct(
        public readonly ?string $simplifiedEntryContentTemplate = null,
        public readonly ?string $simplifiedEntryAgreementTemplate = null,
        public readonly ?string $simplifiedEntryTemplateExtension = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            simplifiedEntryContentTemplate: isset($obj->{'SimplifiedEntryContentTemplate'}) ? (string) $obj->{'SimplifiedEntryContentTemplate'} : null,
            simplifiedEntryAgreementTemplate: isset($obj->{'SimplifiedEntryAgreementTemplate'}) ? (string) $obj->{'SimplifiedEntryAgreementTemplate'} : null,
            simplifiedEntryTemplateExtension: isset($obj->{'SimplifiedEntryTemplateExtension'}) ? (string) $obj->{'SimplifiedEntryTemplateExtension'} : null,
        );
    }
}
