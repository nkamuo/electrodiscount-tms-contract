<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Command;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\ShipmentUpdateInput;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints as Assert;

readonly class UpdateShipmentOrder{
    public function __construct(
        public Ulid $orderId,
        #[Assert\Valid()]
        public ShipmentUpdateInput $shipment,
        public ?string $reason = null,
        public ?string $note = null,
    ){}
}