<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Command\Charge;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Charge\AdjustmentDto;
use Symfony\Component\Uid\Ulid;

readonly class RemoveShipmentAdjustment
{

    public function __construct(
        public  Ulid $shipmentId,
        public  string $name,
        public ?string $reason = null,
        public ?string $note = null,
    ) {
    }
}