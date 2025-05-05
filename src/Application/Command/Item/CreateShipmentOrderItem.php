<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Command\Item;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Item\ShipmentItemCreationInput;
use Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\ShipmentCreationInput;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints as Assert;

readonly class CreateShipmentOrderItem{
    public function __construct(
        public Ulid $orderId,
        #[Assert\Valid()]
        public ShipmentItemCreationInput $item,
        public ?Ulid $itemId = null,
    ){}
}