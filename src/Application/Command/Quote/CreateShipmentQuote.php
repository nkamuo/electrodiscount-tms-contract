<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Command\Quote;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Quote\QuoteDTO;
use Symfony\Component\Uid\Ulid;

final readonly class CreateShipmentQuote{
    public function __construct(
        public Ulid $shipmentId,
        public QuoteDTO $quote,
    ){}
}