<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Command\Contact;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Business\Contact\ContactInfoDto;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints\Valid;

readonly class UpdateShipmentContactInfo{
    public function __construct(
        public Ulid $shipmentId,
        #[Valid()]
        public ContactInfoDto $contact,
        public ?string $reason = null,
        public ?string $note = null,

    ){}
}