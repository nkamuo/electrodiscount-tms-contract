<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Schedule;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Core\MoneyOutput;
use Nkamuo\Electrodiscount\TMS\Contract\Dto\Time\TimeRangeInput;

readonly class TimeSlotInput{
    
    public function __construct(
        public TimeRangeInput $time,
        public ?MoneyOutput $rate = null,
        public ?string $group = null,
        public array $metadata = [],
        public ?bool $suggested = null,

    ) {}
}