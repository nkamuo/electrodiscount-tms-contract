<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Address;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Addressing\AddressDto;
use Symfony\Component\Validator\Constraints\Valid;

readonly class ShipmentAddressUpdateRequest{

    public function __construct(
        #[Valid()]
        public AddressDto $address,
        public ?string $reason = null,
        public ?string $note = null,
    ){}
}