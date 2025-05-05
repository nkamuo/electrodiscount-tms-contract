<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Event;

use Symfony\Component\Uid\Ulid;

readonly class ShipmentOrderDeleted implements ShipmentAsyncEvent{
    public function __construct(
        public Ulid $orderId,
        public ?string $reason = null,
        public ?string $note = null,
    ){}
}