<?php

namespace Misakstvanu\LaravelSkautis\Requests\Exports;

final class ExportInsertInput
{
    public function __construct(
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

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'IsEnabled' => $this->isEnabled,
            'Interval' => $this->interval,
            'IntervalMonth' => $this->intervalMonth,
            'DateNextRun' => $this->dateNextRun,
            'Success' => $this->success,
            'Webservice' => $this->webservice,
            'NameFormat' => $this->nameFormat,
            'FileExtension' => $this->fileExtension,
            'ID_MessageType' => $this->idMessageType,
            'MessageType' => $this->messageType,
            'Settings' => $this->settings,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
