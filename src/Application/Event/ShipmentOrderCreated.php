<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Event;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\ShipmentOutput;
use Symfony\Component\Uid\Ulid;

readonly class ShipmentOrderCreated implements ShipmentAsyncEvent{
    public function __construct(
        public Ulid $orderId,
        public ShipmentOutput $shipment,
    ){}
}