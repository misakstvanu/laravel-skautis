<?php

namespace Misakstvanu\LaravelSkautis\Requests\Welcome;

final class StripeAttachmentAllInput
{
    public function __construct(
        public readonly ?int $idStripe = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isHtmlImage = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Stripe' => $this->idStripe,
            'DisplayName' => $this->displayName,
            'IsHtmlImage' => $this->isHtmlImage,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
