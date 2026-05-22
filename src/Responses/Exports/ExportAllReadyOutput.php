<?php

namespace Misakstvanu\LaravelSkautis\Responses\Exports;

final class ExportAllReadyOutput
{
    public function __construct(
        public readonly ?int $idExportLog = null,
        public readonly ?string $webservice = null,
        public readonly ?string $nameFormat = null,
        public readonly ?string $settings = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idExportLog: isset($obj->{'ID_ExportLog'}) ? (int) $obj->{'ID_ExportLog'} : null,
            webservice: isset($obj->{'Webservice'}) ? (string) $obj->{'Webservice'} : null,
            nameFormat: isset($obj->{'NameFormat'}) ? (string) $obj->{'NameFormat'} : null,
            settings: isset($obj->{'Settings'}) ? (string) $obj->{'Settings'} : null,
        );
    }
}
