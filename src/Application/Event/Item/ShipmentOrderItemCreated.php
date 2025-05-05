<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Item;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Item\ShipmentItemCreationInput;
use Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Item\ShipmentItemOutput;
use Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\ShipmentCreationInput;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints as Assert;

readonly class ShipmentOrderItemCreated{
    public function __construct(
        public Ulid $orderId,
        public Ulid $itemId,
        #[Assert\Valid()]
        public ShipmentItemOutput $item,
    ){}
}