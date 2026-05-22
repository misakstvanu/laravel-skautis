<?php

namespace Misakstvanu\LaravelSkautis\Responses\Exports;

final class ExportLogDetailOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idExport = null,
        public readonly ?string $dateRun = null,
        public readonly ?bool $success = null,
        public readonly ?int $idError = null,
        public readonly ?string $error = null,
        public readonly ?string $fileName = null,
        public readonly ?string $content = null,
        public readonly ?string $fileExtension = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idExport: isset($obj->{'ID_Export'}) ? (int) $obj->{'ID_Export'} : null,
            dateRun: isset($obj->{'DateRun'}) ? (string) $obj->{'DateRun'} : null,
            success: isset($obj->{'Success'}) ? (bool) $obj->{'Success'} : null,
            idError: isset($obj->{'ID_Error'}) ? (int) $obj->{'ID_Error'} : null,
            error: isset($obj->{'Error'}) ? (string) $obj->{'Error'} : null,
            fileName: isset($obj->{'FileName'}) ? (string) $obj->{'FileName'} : null,
            content: isset($obj->{'Content'}) ? (string) $obj->{'Content'} : null,
            fileExtension: isset($obj->{'FileExtension'}) ? (string) $obj->{'FileExtension'} : null,
        );
    }
}
