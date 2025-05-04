<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Time;

use Brick\DateTime\LocalDateTime;

readonly class DateTimeRangeOutput
{
    public function __construct(
        public LocalDateTime $startAt,
        public LocalDateTime $endAt,
    ) {
        if ($startAt->isAfter($endAt)) {
            throw new \InvalidArgumentException("startAt is after the provided endAt parameter");
        }
    }

    public function isExact(): bool
    {
        return $this->startAt->__tostring() === $this->endAt->__tostring();
    }
}
