<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Item;

use Symfony\Component\Uid\Ulid;

readonly class ShipmentOrderItemDeleted{
    public function __construct(
        public Ulid $orderId,
        public Ulid $itemId,
        public ?string $reason = null,
        public ?string $note = null,
    ){}
}