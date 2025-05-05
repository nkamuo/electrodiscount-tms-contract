<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Command\Address;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Addressing\AddressDto;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints\Valid;

readonly class UpdateShipmentDeliveryAddress{
    public function __construct(
        public Ulid $shipmentId,
        #[Valid()]
        public AddressDto $address,
        public ?string $reason = null,
        public ?string $note = null,

    ){}
}