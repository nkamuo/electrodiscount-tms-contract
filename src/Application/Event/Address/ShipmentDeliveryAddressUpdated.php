<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Address;

use Nkamuo\Electrodiscount\TMS\Contract\Application\Event\ShipmentAsyncEvent;
use Nkamuo\Electrodiscount\TMS\Contract\Dto\Addressing\AddressDto;
use Symfony\Component\Uid\Ulid;

readonly class ShipmentDeliveryAddressUpdated implements ShipmentAsyncEvent{
    public function __construct(
        public Ulid $shipmentId,
        public AddressDto $address,
        public ?string $reason = null,
        public ?string $note = null,

    ){}
}