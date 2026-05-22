<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonUpdatePhotoSizeInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $photoX = null,
        public readonly ?int $photoY = null,
        public readonly ?int $photoSize = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'PhotoX' => $this->photoX,
            'PhotoY' => $this->photoY,
            'PhotoSize' => $this->photoSize,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
