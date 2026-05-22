<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class HonourUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isActive = null,
        public readonly ?string $description = null,
        public readonly ?string $fileName = null,
        public readonly ?string $imageContent = null,
        public readonly ?string $stateUrl = null,
        public readonly ?int $maxCount = null,
        public readonly ?string $descriptionUrl = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'IsActive' => $this->isActive,
            'Description' => $this->description,
            'FileName' => $this->fileName,
            'ImageContent' => $this->imageContent,
            'StateUrl' => $this->stateUrl,
            'MaxCount' => $this->maxCount,
            'DescriptionUrl' => $this->descriptionUrl,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
