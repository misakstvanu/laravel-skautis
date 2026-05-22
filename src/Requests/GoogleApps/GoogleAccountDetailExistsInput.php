<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class GoogleAccountDetailExistsInput
{
    public function __construct(
        public readonly ?string $email = null,
        public readonly ?bool $isMain = null,
        public readonly ?bool $onlyDb = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Email' => $this->email,
            'IsMain' => $this->isMain,
            'OnlyDb' => $this->onlyDb,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
