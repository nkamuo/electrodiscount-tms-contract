<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Status;

use Nkamuo\Electrodiscount\TMS\Contract\Application\Event\ShipmentAsyncEvent;
use Symfony\Component\Uid\Ulid;

readonly class ShipmentIntransit  implements ShipmentAsyncEvent{
    public function __construct(
        public Ulid $shipmentId,
        public ?string $reason = null,
        public ?string $note = null,
        public ?\DateTimeImmutable $occuredAt = null,
    ){}
}