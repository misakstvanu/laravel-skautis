<?php

namespace Misakstvanu\LaravelSkautis\Responses\DocumentStorage;

final class DocumentVersionAllToBackupOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idCloud = null,
        public readonly ?string $contentType = null,
        public readonly ?string $fileNameExtension = null,
        public readonly ?int $imageWidth = null,
        public readonly ?int $imageHeight = null,
        public readonly ?string $storage = null,
        public readonly ?string $cloudGuid = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idCloud: isset($obj->{'ID_Cloud'}) ? (int) $obj->{'ID_Cloud'} : null,
            contentType: isset($obj->{'ContentType'}) ? (string) $obj->{'ContentType'} : null,
            fileNameExtension: isset($obj->{'FileNameExtension'}) ? (string) $obj->{'FileNameExtension'} : null,
            imageWidth: isset($obj->{'ImageWidth'}) ? (int) $obj->{'ImageWidth'} : null,
            imageHeight: isset($obj->{'ImageHeight'}) ? (int) $obj->{'ImageHeight'} : null,
            storage: isset($obj->{'Storage'}) ? (string) $obj->{'Storage'} : null,
            cloudGuid: isset($obj->{'CloudGuid'}) ? (string) $obj->{'CloudGuid'} : null,
        );
    }
}
