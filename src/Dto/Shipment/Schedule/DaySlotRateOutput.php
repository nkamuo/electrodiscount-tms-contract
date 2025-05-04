<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Schedule;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Core\MoneyOutput;
use Brick\DateTime\LocalDate;

readonly class DaySlotRateOutput
{

    public function __construct(
        public LocalDate $date,
        public MoneyOutput $rate,
        public ?string $group = null,
        public array $metadata = [],
        public ?bool $suggested = null,

    ) {}
}
