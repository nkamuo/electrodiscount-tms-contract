<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Command\Schedule;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Schedule\TimeSlotInput;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints as Assert;

readonly class  UpdateShipmentPickupTime{
    public function __construct(
        public Ulid $shipmentId,
        #[Assert\Valid()]
        public TimeSlotInput $slot,
    ){}
}