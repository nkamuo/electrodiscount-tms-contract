<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Schedule;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Core\MoneyOutput;
use Nkamuo\Electrodiscount\TMS\Contract\Dto\Time\TimeRangeOutput;

readonly class TimeSlotRateOutput
{

    public function __construct(
        public TimeRangeOutput $timeRange,
        public MoneyOutput $rate,
        public ?string $group = null,
        public array $metadata = [],
        public ?bool $suggested = null,

    ) {}
}
