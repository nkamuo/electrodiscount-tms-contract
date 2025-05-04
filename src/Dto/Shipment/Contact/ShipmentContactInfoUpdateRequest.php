<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Contact;

use Symfony\Component\Validator\Constraints\Valid;



readonly class ShipmentContactInfoUpdateRequest{

    public function __construct(
        #[Valid()]
        public ContactInfoDto $contact,
        public ?string $reason = null,
        public ?string $note = null,
    ){}
}