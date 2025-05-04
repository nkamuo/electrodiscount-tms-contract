<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Load\LoadUpdatInput;
use Symfony\Component\Validator\Constraints as Assert;

readonly class ShipmentItemUpdateDto{
    public function __construct(
        public LoadUpdatInput $load,
        #[Assert\GreaterThan(0)]
        public ?int $quantity = null,
        #[Assert\Length(max: 255)]
        public ?string $note = null,
        #[Assert\Length(max: 255)]
        public ?string $description = null,
        public ?int $pricingTemplateId = null,
    ){

    }

    public function copyWith(
        ?int $quantity = null,
        ?LoadUpdatInput $load = null,
        ?string $note = null,
        ?string $description = null,
        ?int $pricingTemplateId = null,
    ): static{
        return new static(
            load: $load ?? $this->load,
            quantity: $quantity ?? $this->quantity,
            note: $note ?? $this->note,
            description: $description ?? $this->description,
            pricingTemplateId: $pricingTemplateId ?? $this->pricingTemplateId,
        );
    }
}