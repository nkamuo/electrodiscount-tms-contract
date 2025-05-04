<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Requirement;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints\Unique;

readonly class UpdateShipmentRequirementRequest
{
    public function __construct(
        /** @var ShipmentRequirementInput[] */
        #[Assert\Count(max: 10)]
        #[Assert\Valid]
        public readonly array $requirements,
        public readonly ?string $reason = null,
        public readonly ?string $note = null,
        public readonly ?string $description = null,
        public readonly ?string $group = null,
        public readonly array $metadata = [],
    ) {
    }
}