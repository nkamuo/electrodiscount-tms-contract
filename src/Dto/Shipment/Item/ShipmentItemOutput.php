<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Item;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Load\DimensionInput;
use Nkamuo\Electrodiscount\TMS\Contract\Dto\Load\LoadInput;
use Nkamuo\Electrodiscount\TMS\Contract\Dto\Load\LoadOutput;
use Nkamuo\Electrodiscount\TMS\Contract\Entity\Load\Load;
use Nkamuo\Electrodiscount\TMS\Contract\Entity\Shipment\Item;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints as Assert;

readonly class ShipmentItemOutput
{

    public function __construct(
        // public DimensionInput $dimension,
        // public int $weight ,
        public int $quantity,
        public ?string $title = null,
        public ?LoadOutput $load = null,
        public ?Ulid $loadId = null,
    ) {}


    public function copyWith(
        ?int $quantity = null,
        ?string $title = null,
        ?LoadOutput $load = null,
        ?Ulid $loadId = null,
    ): self {
        return new static(
            quantity: $quantity ?? $this->quantity,
            title: $title ?? $this->title,
            load: $load ?? $this->load,
            loadId: $loadId ?? $this->loadId,
        );
    }



    public static function fromEntity(Item $item): self{
        /** @var Load $load */
        $load = null;
        $l = null;
        if(($load = $item->getLoad()) != null){
            $l = LoadOutput::fromEntity($load);
        }
        return new self(
            quantity: $item->getQuantity(),
            load: $l,
            loadId: $load?->getId(),
            title: null,//TODO: $item->getTitle(),
        );
    }
}
