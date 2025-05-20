<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Quote;

use Nkamuo\Electrodiscount\TMS\Contract\Application\Event\ShipmentAsyncEvent;
use Symfony\Component\Uid\Ulid;

final readonly class ShipmentQuoteRemoved implements ShipmentAsyncEvent{
    public function __construct(
        public Ulid $shipmentId,
        public Ulid $quoteId,
        public ?string $reason = null,
        public ?string $note = null,
    ){}
}