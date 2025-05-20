<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Quote;

use Nkamuo\Electrodiscount\TMS\Contract\Application\Event\ShipmentAsyncEvent;
use Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Quote\QuoteDTO;
use Symfony\Component\Uid\Ulid;

final readonly class ShipmentQuoteCreated implements ShipmentAsyncEvent
{
    public function __construct(
        public Ulid $quoteId,
        public Ulid $shipmentId,
        public QuoteDTO $quote,
        public ?string $reason = null,
        public ?string $note = null,
    ) {}
}
