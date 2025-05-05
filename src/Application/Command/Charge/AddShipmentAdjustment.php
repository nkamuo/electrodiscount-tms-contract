<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Command\Charge;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Charge\AdjustmentDto;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints\Valid;

readonly class AddShipmentAdjustment
{

    public function __construct(
        public  Ulid $shipmentId,
        #[Valid()]
        public  AdjustmentDto $adjustment,
        public ?string $reason = null,
        public ?string $note = null,
    ) {
    }
}