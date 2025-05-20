<?php


namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Quote;

class AdjustmentDTO
{
    public function __construct(
        public readonly ?int $id,
        public readonly ?string $name,
        public readonly ?string $title,
        public readonly ?int $amount,
        public readonly ?int $quoteId,
    ) {}

    public function copyWith(
        ?int $id = null,
        ?string $name = null,
        ?string $title = null,
        ?int $amount = null,
        ?int $quoteId = null,
    ): self {
        return new self(
            id: $id ?? $this->id,
            name: $name ?? $this->name,
            title: $title ?? $this->title,
            amount: $amount ?? $this->amount,
            quoteId: $quoteId ?? $this->quoteId,
        );
    }
}
