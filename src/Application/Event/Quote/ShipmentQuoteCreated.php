<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Quote;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Quote\QuoteDTO;
use Symfony\Component\Uid\Ulid;

final readonly class ShipmentQuoteCreated
{
    public function __construct(
        public Ulid $quoteId,
        public Ulid $shipmentId,
        public QuoteDTO $quote,
    ) {}
}
