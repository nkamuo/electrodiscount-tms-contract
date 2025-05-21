<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Quote;


use Brick\DateTime\LocalDate;
use DateTimeImmutable;

class QuoteDTO
{
    public function __construct(
        public readonly ?string $currency = null,
        public readonly ?int $amount = null,
        public readonly ?LocalDate $date = null,
        public readonly ?string $note = null,
        public readonly ?string $description = null,
        /** @var AdjustmentDTO[] */
        public readonly ?array $adjustments = null,
        public readonly ?string $status = null,
    ) {}

    public function copyWith(
        ?string $currency = null,
        ?int $amount = null,
        ?LocalDate $date = null,
        ?string $note = null,
        ?string $description = null,
        ?array $adjustments = null,
        ?string $status = null,
    ): self {
        return new self(
            currency: $currency ?? $this->currency,
            amount: $amount ?? $this->amount,
            date: $date ?? $this->date,
            note: $note ?? $this->note,
            description: $description ?? $this->description,
            adjustments: $adjustments ?? $this->adjustments,
            status: $status ?? $this->status,
        );
    }
}