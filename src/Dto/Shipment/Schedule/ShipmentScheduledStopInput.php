<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Schedule;

use Symfony\Component\Validator\Constraints as Assert;
use Nkamuo\Electrodiscount\TMS\Contract\Dto\Time\TimeRangeInput;
use Brick\DateTime\LocalDate;

readonly class ShipmentScheduledStopInput
{

    public function __construct(
        public LocalDate $date,
        #[Assert\Valid()]
        public ?TimeRangeInput $time = null,
    ) {}


    public function copyWith(
        ?LocalDate $date = null,
        ?TimeRangeInput $time = null,
    ): self {
        return new self(
            date: $date ?? $this->date,
            time: $time ?? $this->time,
        );
    }
}
