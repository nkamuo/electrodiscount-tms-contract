<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Schedule;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Schedule\DaySlotInput;
use App\Entity\Shipment\Rate\Rate;
use Nkamuo\Electrodiscount\TMS\Contract\Application\Event\ShipmentAsyncEvent;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints as Assert;

readonly class  ShipmentPickupDateUpdated implements ShipmentAsyncEvent{
    public function __construct(
        public Ulid $shipmentId,
        #[Assert\Valid()]
        public DaySlotInput $slot,
    ){}
}