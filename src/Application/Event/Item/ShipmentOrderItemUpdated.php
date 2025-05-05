<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Item;

use Nkamuo\Electrodiscount\TMS\Contract\Application\Event\ShipmentAsyncEvent;
use Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Item\ShipmentItemOutput;
use Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\ShipmentUpdateInput;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints as Assert;

readonly class ShipmentOrderItemUpdated implements ShipmentAsyncEvent{
    public function __construct(
        public Ulid $orderId,
        public Ulid $itemId,
        #[Assert\Valid()]
        public ShipmentItemOutput $item,
        public ?string $reason = null,
        public ?string $note = null,
    ){}
}