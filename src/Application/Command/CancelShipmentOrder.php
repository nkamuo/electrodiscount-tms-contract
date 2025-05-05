<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Command;

use Symfony\Component\Uid\Ulid;

readonly class CancelShipmentOrder{
    public function __construct(
        public Ulid $orderId,
        public ?string $reason = null,
        public ?string $note = null,
    ){}
}