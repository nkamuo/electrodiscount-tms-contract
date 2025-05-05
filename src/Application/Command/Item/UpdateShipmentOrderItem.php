<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Command\Item;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Item\ShipmentItemInput;
use Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\ShipmentUpdateInput;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints as Assert;

readonly class UpdateShipmentOrderItem{
    public function __construct(
        public Ulid $orderId,
        public Ulid $itemId,
        #[Assert\Valid()]
        public ShipmentItemInput $item,
        public ?string $reason = null,
        public ?string $note = null,
    ){}
}