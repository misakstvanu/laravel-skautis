<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class TempFileDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?string $id = null,
        public readonly ?string $filename = null,
        public readonly ?string $extension = null,
        public readonly ?string $content = null,
        public readonly ?string $hash = null,
        public readonly ?string $hashMD5 = null,
        public readonly ?int $imageWidth = null,
        public readonly ?int $imageHeight = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            filename: isset($obj->{'Filename'}) ? (string) $obj->{'Filename'} : null,
            extension: isset($obj->{'Extension'}) ? (string) $obj->{'Extension'} : null,
            content: isset($obj->{'Content'}) ? (string) $obj->{'Content'} : null,
            hash: isset($obj->{'Hash'}) ? (string) $obj->{'Hash'} : null,
            hashMD5: isset($obj->{'HashMD5'}) ? (string) $obj->{'HashMD5'} : null,
            imageWidth: isset($obj->{'ImageWidth'}) ? (int) $obj->{'ImageWidth'} : null,
            imageHeight: isset($obj->{'ImageHeight'}) ? (int) $obj->{'ImageHeight'} : null,
        );
    }
}
