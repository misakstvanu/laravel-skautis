<?php

namespace Misakstvanu\LaravelSkautis\Requests\Welcome;

final class StripeAttachmentInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idStripe = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isHtmlImage = null,
        public readonly ?string $extension = null,
        public readonly ?string $content = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Stripe' => $this->idStripe,
            'DisplayName' => $this->displayName,
            'IsHtmlImage' => $this->isHtmlImage,
            'Extension' => $this->extension,
            'Content' => $this->content,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
