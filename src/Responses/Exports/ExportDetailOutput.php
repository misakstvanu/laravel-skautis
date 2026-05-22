<?php

namespace Misakstvanu\LaravelSkautis\Responses\Exports;

final class ExportDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isEnabled = null,
        public readonly ?int $interval = null,
        public readonly ?int $intervalMonth = null,
        public readonly ?string $dateNextRun = null,
        public readonly ?bool $success = null,
        public readonly ?string $webservice = null,
        public readonly ?string $nameFormat = null,
        public readonly ?string $fileExtension = null,
        public readonly ?string $idMessageType = null,
        public readonly ?string $messageType = null,
        public readonly ?string $settings = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            isEnabled: isset($obj->{'IsEnabled'}) ? (bool) $obj->{'IsEnabled'} : null,
            interval: isset($obj->{'Interval'}) ? (int) $obj->{'Interval'} : null,
            intervalMonth: isset($obj->{'IntervalMonth'}) ? (int) $obj->{'IntervalMonth'} : null,
            dateNextRun: isset($obj->{'DateNextRun'}) ? (string) $obj->{'DateNextRun'} : null,
            success: isset($obj->{'Success'}) ? (bool) $obj->{'Success'} : null,
            webservice: isset($obj->{'Webservice'}) ? (string) $obj->{'Webservice'} : null,
            nameFormat: isset($obj->{'NameFormat'}) ? (string) $obj->{'NameFormat'} : null,
            fileExtension: isset($obj->{'FileExtension'}) ? (string) $obj->{'FileExtension'} : null,
            idMessageType: isset($obj->{'ID_MessageType'}) ? (string) $obj->{'ID_MessageType'} : null,
            messageType: isset($obj->{'MessageType'}) ? (string) $obj->{'MessageType'} : null,
            settings: isset($obj->{'Settings'}) ? (string) $obj->{'Settings'} : null,
        );
    }
}
