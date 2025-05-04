<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Time;

use Brick\DateTime\LocalDate;

readonly class DayRangeOutput
{
    public function __construct(
        public LocalDate $startAt,
        public LocalDate $endAt,
    ) {
        if($startAt->isAfter($endAt)){
            throw new \InvalidArgumentException("startAt is after the provided endAt parameter");
        }
    }

    public function isExact(): bool{
        return $this->startAt->__tostring() === $this->endAt->__tostring();
    }
}
