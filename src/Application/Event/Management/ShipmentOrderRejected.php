<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Management;

use Nkamuo\Electrodiscount\TMS\Contract\Application\Event\ShipmentAsyncEvent;
use Symfony\Component\Uid\Ulid;

readonly class ShipmentOrderRejected implements ShipmentAsyncEvent{
    public function __construct(
        public Ulid $orderId,
        public ?string $reason = null,
        public ?string $note = null,
    ){}
}