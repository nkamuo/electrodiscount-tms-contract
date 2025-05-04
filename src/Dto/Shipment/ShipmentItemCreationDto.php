<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Load\LoadCreationInput;
use Symfony\Component\Validator\Constraints as Assert;

readonly class ShipmentItemCreationDto{
    public function __construct(
        public LoadCreationInput $load,
        #[Assert\GreaterThan(0)]
        public int $quantity,
        #[Assert\Length(max: 255)]
        public ?string $name = null,
        #[Assert\Length(max: 255)]
        public ?string $description = null,
        public ?int $pricingTemplateId = null,
    ){

    }

    public function copyWith(
        ?int $quantity = null,
        ?LoadCreationInput $load = null,
        ?string $name = null,
        ?string $description = null,
        ?int $pricingTemplateId = null,
    ): static{
        return new static(
            load: $load ?? $this->load,
            quantity: $quantity ?? $this->quantity,
            name: $name ?? $this->name,
            description: $description ?? $this->description,
            pricingTemplateId: $pricingTemplateId ?? $this->pricingTemplateId,
        );
    }
}