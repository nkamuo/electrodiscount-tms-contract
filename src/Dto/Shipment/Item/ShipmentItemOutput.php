<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Item;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Load\LoadOutput;
use Symfony\Component\Uid\Ulid;

readonly class ShipmentItemOutput
{

    public function __construct(
        public ?Ulid $id = null,
        // public DimensionInput $dimension,
        // public int $weight ,
        public int $quantity,
        public ?string $title = null,
        public ?LoadOutput $load = null,
        public ?Ulid $loadId = null,
    ) {}


    public function copyWith(
        ?Ulid $id = null,
        ?int $quantity = null,
        ?string $title = null,
        ?LoadOutput $load = null,
        ?Ulid $loadId = null,
    ): self {
        return new static(
            id: $id ?? $this->id,
            quantity: $quantity ?? $this->quantity,
            title: $title ?? $this->title,
            load: $load ?? $this->load,
            loadId: $loadId ?? $this->loadId,
        );
    }

}
