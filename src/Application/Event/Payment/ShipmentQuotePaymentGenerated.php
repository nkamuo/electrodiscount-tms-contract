<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Payment;

use Nkamuo\Electrodiscount\TMS\Contract\Application\Event\ShipmentAsyncEvent;
use Symfony\Component\Uid\Ulid;

readonly class ShipmentQuotePaymentGenerated implements ShipmentAsyncEvent{
    public function __construct(
        public Ulid $paymentId,
        public Ulid $shipmentId,
        public Ulid $quoteId,
        public ?string $gateway = null,
        public ?string $paymentMethod = null,
        public ?string $currency = null,
        public ?string $note = null,
    ){}

}
