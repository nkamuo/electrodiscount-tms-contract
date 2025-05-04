<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment;



readonly class CancelShipmentRequest
{
    public function __construct(
        public readonly ?string $reason = null,
        public readonly ?string $note = null,
        public readonly ?string $description = null,
    ) {
    }
}