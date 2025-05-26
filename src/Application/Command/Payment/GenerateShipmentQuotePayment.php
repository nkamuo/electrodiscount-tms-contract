<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Command\Payment;

use Symfony\Component\Uid\Ulid;

readonly class GenerateShipmentQuotePayment{
    public function __construct(
        public Ulid $shipmentId,
        public Ulid $quoteId,
        public ?string $gateway = null,
        public ?string $paymentMethod = null,
        public ?string $currency = null,
        public ?string $note = null,
    ){}

}
