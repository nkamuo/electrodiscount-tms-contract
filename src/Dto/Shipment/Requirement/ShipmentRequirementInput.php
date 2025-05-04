<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Requirement;

use Symfony\Component\Uid\Ulid;

readonly class ShipmentRequirementInput
{
    public function __construct(
        public Ulid $requirementId,
        public ?string $reason = null,
        public ?string $note = null,
        public ?string $description = null,
        public ?string $group = null,
        public array $metadata = [],
    ) {
    }
}