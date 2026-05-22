<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventCongressDetailFunctionAgreementOutput
{
    public function __construct(
        public readonly ?string $functionAgreementContent = null,
        public readonly ?string $functionAgreementExtension = null,
        public readonly ?string $functionAgreement = null,
        public readonly ?int $idDocumentFunctionAgreement = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            functionAgreementContent: isset($obj->{'FunctionAgreementContent'}) ? (string) $obj->{'FunctionAgreementContent'} : null,
            functionAgreementExtension: isset($obj->{'FunctionAgreementExtension'}) ? (string) $obj->{'FunctionAgreementExtension'} : null,
            functionAgreement: isset($obj->{'FunctionAgreement'}) ? (string) $obj->{'FunctionAgreement'} : null,
            idDocumentFunctionAgreement: isset($obj->{'ID_DocumentFunctionAgreement'}) ? (int) $obj->{'ID_DocumentFunctionAgreement'} : null,
        );
    }
}
