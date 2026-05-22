<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class FunctionDetailAgreementDownloadOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $storage = null,
        public readonly ?int $idDocument = null,
        public readonly ?string $agreementExtension = null,
        public readonly ?string $agreementContent = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            storage: isset($obj->{'Storage'}) ? (string) $obj->{'Storage'} : null,
            idDocument: isset($obj->{'ID_Document'}) ? (int) $obj->{'ID_Document'} : null,
            agreementExtension: isset($obj->{'AgreementExtension'}) ? (string) $obj->{'AgreementExtension'} : null,
            agreementContent: isset($obj->{'AgreementContent'}) ? (string) $obj->{'AgreementContent'} : null,
        );
    }
}
