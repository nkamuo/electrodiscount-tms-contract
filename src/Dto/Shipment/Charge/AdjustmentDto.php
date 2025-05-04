<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Charge;

use Nkamuo\Electrodiscount\TMS\Contract\Entity\Shipment\Charge\Adjustment;
use Nkamuo\Electrodiscount\TMS\Contract\Enum\Shipment\Charge\AdjustmentType;

readonly class AdjustmentDto
{

    public const NAMED_PICKUP_DATE = 'pickup.date';
    public const NAMED_PICKUP_TIME = 'pickup.time';
    public const NAMED_PICKUP_LOCATION = 'pickup.location';

    public const NAMED_DELIVERY_DATE = 'delivery.date';
    public const NAMED_DELIVERY_TIME = 'delivery.time';
    public const NAMED_DELIVERY_LOCATION = 'delivery.location';

    public const NAMED_ADDITIONAL_SERVICE = 'additional.service';


    public function __construct(
        public string $name,
        public int $amount,
        public AdjustmentType $type,
        public ?string $title = null,
        public ?string $subtitle = null,
        public ?string $description = null,
        public ?string $currency = null,
    )
    {
    }


    public function toModel(): Adjustment{
        return (new Adjustment())
            ->setName($this->name)
            ->setAmount($this->amount)
            ->setType($this->type)
            ->setTitle($this->title)
            ->setSubtitle($this->subtitle)
            ;
    }


    public static function fromModel(Adjustment $adjustment): self{
        return new self(
            name: $adjustment->getName(),
            amount: $adjustment->getAmount(),
            type: $adjustment->getType(),
            title: $adjustment->getTitle(),
            subtitle: $adjustment->getSubtitle(),

        );
    }
}