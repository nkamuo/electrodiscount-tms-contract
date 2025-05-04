<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Requirement;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Core\MoneyOutput;
use Nkamuo\Electrodiscount\TMS\Contract\Entity\Shipment\Requirement;
use Brick\DateTime\LocalDate;

readonly class ShipmentRequirementRateOutput
{

    public function __construct( 
        public RequirementOutput $requirement,
        public MoneyOutput $rate,
        public ?string $group = null,
        public array $metadata = [],
        public ?bool $suggested = null,

    ) {}
}
