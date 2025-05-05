<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Requirement;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Requirement\ShipmentRequirementInput;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints as Assert;

readonly class ShipmentOrderRequirementUpdated
{
    public function __construct(
        public Ulid $orderId,
        /** @var ShipmentRequirementInput[] */
        #[Assert\Count(max: 10)]
        #[Assert\Valid()]
        public array $requirements,
        public ?string $reason = null,
        public ?string $note = null,
    ) {}
}
