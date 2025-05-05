<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Command;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\ShipmentCreationInput;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints as Assert;

readonly class CreateShipmentOrder{
    public function __construct(
        #[Assert\Valid()]
        public ShipmentCreationInput $shipment,
        public ?Ulid $orderId = null,
        #[Assert\When(
            expression:'this.guestId == null',
            constraints: [
                new Assert\NotNull(),
                new Assert\NotBlank(),
            ]
        )]
        public ?Ulid $userId = null,
        #[Assert\When(
            expression:'this.userId != null',
            constraints: [
                new Assert\IsNull(),
            ]
        )]
        public ?Ulid $guestId = null,
    ){}
}