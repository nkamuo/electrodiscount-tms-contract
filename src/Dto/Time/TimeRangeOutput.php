<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Time;

use Brick\DateTime\LocalTime;
use DateTimeInterface;

readonly class TimeRangeOutput
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

    public static function fromNatives(
        DateTimeInterface $startAt,
        DateTimeInterface $endAt,
    ): self {
        return new self(
            startAt: LocalTime::fromNativeDateTime($startAt),
            endAt: LocalTime::fromNativeDateTime($endAt),
        );
    }
}
