<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Schedule;

use Nkamuo\Electrodiscount\TMS\Contract\Application\Event\ShipmentAsyncEvent;
use Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Schedule\TimeSlotInput;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints as Assert;

readonly class  ShipmentDeliveryTimeUpdated implements ShipmentAsyncEvent{
    public function __construct(
        public Ulid $shipmentId,
        #[Assert\Valid()]
        public TimeSlotInput $slot,
    ){}
}