<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class AlignmentDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?int $idAlignmentType = null,
        public readonly ?string $alignmentType = null,
        public readonly ?string $colorMargin = null,
        public readonly ?string $colorCenter = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            idAlignmentType: isset($obj->{'ID_AlignmentType'}) ? (int) $obj->{'ID_AlignmentType'} : null,
            alignmentType: isset($obj->{'AlignmentType'}) ? (string) $obj->{'AlignmentType'} : null,
            colorMargin: isset($obj->{'ColorMargin'}) ? (string) $obj->{'ColorMargin'} : null,
            colorCenter: isset($obj->{'ColorCenter'}) ? (string) $obj->{'ColorCenter'} : null,
        );
    }
}
