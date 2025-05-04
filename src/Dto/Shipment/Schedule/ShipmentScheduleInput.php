<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Schedule;

use Symfony\Component\Validator\Constraints as Assert;
use Nkamuo\Electrodiscount\TMS\Contract\Dto\Time\TimeRangeInput;
use Brick\DateTime\LocalDate;

readonly class ShipmentScheduleInput
{

    public function __construct(
        #[Assert\Valid()]
        public ?ShipmentScheduledStopInput $pickup = null,
        #[Assert\Valid()]
        public ?ShipmentScheduledStopInput $delivery = null,
    ) {}


    public function copyWith(
        ?LocalDate $pickup = null,
        ?TimeRangeInput $delivery = null,
    ): self {
        return new self(
            pickup: $pickup ?? $this->pickup,
            delivery: $delivery ?? $this->delivery,
        );
    }
}
