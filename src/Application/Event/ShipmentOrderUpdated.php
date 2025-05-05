<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Event;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\ShipmentOutput;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints as Assert;

readonly class ShipmentOrderUpdated{
    public function __construct(
        public Ulid $orderId,
        #[Assert\Valid()]
        public ShipmentOutput $shipment,
        public ?string $reason = null,
        public ?string $note = null,
    ){}
}