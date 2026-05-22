<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantTypeTextInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idGrantType = null,
        public readonly ?string $grantType = null,
        public readonly ?string $displayName = null,
        public readonly ?string $text = null,
        public readonly ?bool $isActive = null,
        public readonly ?string $note = null,
        public readonly ?string $idGrantTypeTextCategory = null,
        public readonly ?string $grantTypeTextCategory = null,
        public readonly ?int $order = null,
        public readonly ?bool $isNumbered = null,
        public readonly ?bool $forChange = null,
        public readonly ?bool $forRevoke = null,
        public readonly ?bool $forFirstRevoke = null,
        public readonly ?string $textWithoutLines = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_GrantType' => $this->idGrantType,
            'GrantType' => $this->grantType,
            'DisplayName' => $this->displayName,
            'Text' => $this->text,
            'IsActive' => $this->isActive,
            'Note' => $this->note,
            'ID_GrantTypeTextCategory' => $this->idGrantTypeTextCategory,
            'GrantTypeTextCategory' => $this->grantTypeTextCategory,
            'Order' => $this->order,
            'IsNumbered' => $this->isNumbered,
            'ForChange' => $this->forChange,
            'ForRevoke' => $this->forRevoke,
            'ForFirstRevoke' => $this->forFirstRevoke,
            'TextWithoutLines' => $this->textWithoutLines,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
