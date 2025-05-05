<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Contact;

use Nkamuo\Electrodiscount\TMS\Contract\Application\Event\ShipmentAsyncEvent;
use Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Contact\ContactInfoDto;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints\Valid;

readonly class ShipmentContactInfoUpdated implements ShipmentAsyncEvent{
    public function __construct(
        public Ulid $shipmentId,
        #[Valid]
        public ContactInfoDto $contact,
        public ?string $reason = null,
        public ?string $note = null,

    ){}
}