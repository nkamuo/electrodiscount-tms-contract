<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Item;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Load\DimensionInput;
use Nkamuo\Electrodiscount\TMS\Contract\Dto\Load\LoadInput;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints as Assert;

readonly class ShipmentItemInput{
    
    public function __construct(
        // public DimensionInput $dimension,
        // public int $weight ,
        public int $quantity ,
        public ?string $title = null,

        #[Assert\When(
            expression: 'this.loadId == null',
            constraints:[
                new Assert\NotNull(),
                new Assert\NotBlank(),
            ]
        )]
        #[Assert\Valid()]
        public ?LoadInput $load = null,

        #[Assert\When(
            expression: 'this.load == null',
            constraints:[
                new Assert\NotNull(),
                new Assert\NotBlank(),
            ]
        )]
        #[Assert\When(
            expression: 'this.load != null',
            constraints:[
                new Assert\IsNull(),
            ]
        )]
        public ?Ulid $loadId = null,
    ){}


    public function copyWith(
        ?int $quantity = null,
        ?string $title = null,
        ?LoadInput $load = null,
        ?Ulid $loadId = null,
    ): self {
        return new static(
            quantity: $quantity ?? $this->quantity,
            title: $title ?? $this->title,
            load: $load ?? $this->load,
            loadId: $loadId ?? $this->loadId,
        );
    }

}