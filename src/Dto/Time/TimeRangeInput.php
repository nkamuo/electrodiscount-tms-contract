<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Time;

use Nkamuo\Electrodiscount\TMS\Contract\Entity\Shipment\Schedule\TimeRange;
use Brick\DateTime\LocalTime;

readonly class TimeRangeInput
{
    public function __construct(
        public LocalTime $startAt,
        public LocalTime $endAt,
    ) {
        if ($startAt->isAfter($endAt)) {
            throw new \InvalidArgumentException("startAt is after the provided endAt parameter");
        }
    }

    public function isExact(): bool
    {
        return $this->startAt->__tostring() === $this->endAt->__tostring();
    }


    public function toModel(): TimeRange
    {
        return (new TimeRange())
            ->setStartAt($this->startAt)
            ->setEndAt($this->endAt)
        ;
    }
}
