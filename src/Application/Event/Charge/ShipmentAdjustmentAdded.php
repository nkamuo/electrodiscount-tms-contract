<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Charge;

use Nkamuo\Electrodiscount\TMS\Contract\Application\Event\ShipmentAsyncEvent;
use Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Charge\AdjustmentDto;
use Symfony\Component\Uid\Ulid;

readonly class ShipmentAdjustmentAdded implements ShipmentAsyncEvent
{

    public function __construct(
        public  Ulid $shipmentId,
        public  AdjustmentDto $adjustment,
        public ?string $reason = null,
        public ?string $note = null,
    ) {
    }
}