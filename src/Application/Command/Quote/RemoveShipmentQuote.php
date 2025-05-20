<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Command\Quote;

use Symfony\Component\Uid\Ulid;

final readonly class RemoveShipmentQuote{
    public function __construct(
        public Ulid $shipmentId,
        public Ulid $quoteId,
        public ?string $reason = null,
        public ?string $note = null,
    ){}
}