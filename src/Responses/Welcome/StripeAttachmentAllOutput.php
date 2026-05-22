<?php

namespace Misakstvanu\LaravelSkautis\Responses\Welcome;

final class StripeAttachmentAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idStripe = null,
        public readonly ?string $stripe = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isHtmlImage = null,
        public readonly ?string $extension = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idStripe: isset($obj->{'ID_Stripe'}) ? (int) $obj->{'ID_Stripe'} : null,
            stripe: isset($obj->{'Stripe'}) ? (string) $obj->{'Stripe'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            isHtmlImage: isset($obj->{'IsHtmlImage'}) ? (bool) $obj->{'IsHtmlImage'} : null,
            extension: isset($obj->{'Extension'}) ? (string) $obj->{'Extension'} : null,
        );
    }
}
