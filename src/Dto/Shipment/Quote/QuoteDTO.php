<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Quote;


use Brick\DateTime\LocalDate;
use DateTimeImmutable;

class QuoteDTO
{
    public function __construct(
        public readonly ?int $id,
        public readonly ?int $shipmentId,
        public readonly ?string $currency,
        public readonly ?int $amount,
        public readonly ?LocalDate $date,
        public readonly ?string $note,
        public readonly ?string $description,
        public readonly ?DateTimeImmutable $createdAt,
        /** @var AdjustmentDTO[] */
        public readonly array $adjustments,
        public readonly ?int $adjustmentsTotal,
        public readonly ?int $total,
        public readonly ?string $status,
    ) {}

    public function copyWith(
        ?int $id = null,
        ?int $shipmentId = null,
        ?string $currency = null,
        ?int $amount = null,
        ?LocalDate $date = null,
        ?string $note = null,
        ?string $description = null,
        ?DateTimeImmutable $createdAt = null,
        ?array $adjustments = null,
        ?int $adjustmentsTotal = null,
        ?int $total = null,
        ?string $status = null,
    ): self {
        return new self(
            id: $id ?? $this->id,
            shipmentId: $shipmentId ?? $this->shipmentId,
            currency: $currency ?? $this->currency,
            amount: $amount ?? $this->amount,
            date: $date ?? $this->date,
            note: $note ?? $this->note,
            description: $description ?? $this->description,
            createdAt: $createdAt ?? $this->createdAt,
            adjustments: $adjustments ?? $this->adjustments,
            adjustmentsTotal: $adjustmentsTotal ?? $this->adjustmentsTotal,
            total: $total ?? $this->total,
            status: $status ?? $this->status,
        );
    }
}