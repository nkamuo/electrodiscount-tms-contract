<?php


namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Quote;

class AdjustmentDTO
{
    public function __construct(
        public readonly ?string $name = null,
        public readonly ?string $title = null,
        public readonly ?int $amount = null,
    ) {}

    public function copyWith(
        ?string $name = null,
        ?string $title = null,
        ?int $amount = null,
    ): self {
        return new self(
            name: $name ?? $this->name,
            title: $title ?? $this->title,
            amount: $amount ?? $this->amount,
        );
    }
}
