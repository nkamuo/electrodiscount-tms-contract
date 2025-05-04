<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Addressing\AddressDto;
use Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Contact\ContactInfoDto;
use Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Schedule\ShipmentScheduleInput;
use Symfony\Component\Validator\Constraints as Assert;

readonly class ShipmentInput
{
    public function __construct(
        #[Assert\NotNull()]
        #[Assert\NotBlank()]
        public ?string  $origin = null,
        #[Assert\NotNull()]
        #[Assert\NotBlank()]
        public ?string  $destination = null,
        // 
        public ?AddressDto  $originAddress = null,
        // 
        public ?AddressDto  $destinationAddress = null,
        /** @var \Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Item\ShipmentItemCreationInput[] */
        #[Assert\Valid()]
        #[Assert\Count(max: 100)]
        public array $items = [],
        #[Assert\Valid()]
        public ?ShipmentScheduleInput $schedule = null,
        public ?ContactInfoDto $contact = null,
        /** @var \Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Requirement\ShipmentRequirementInput[] */
        #[Assert\Valid()]
        #[Assert\Count(max: 100)]
        public array $requirements = [],
    ) {}

    public function  copyWith(
        ?string  $origin = null,
        ?string  $destination = null,
        ?AddressDto  $originAddress = null,
        ?AddressDto  $destinationAddress = null,
        ?array $items = null,
        ?ShipmentScheduleInput $schedule = null,
        ?ContactInfoDto $contact = null,
        ?array $requirements = null,
    ): static {
        return new static(
            origin: $origin  ?? $this->origin,
            destination: $destination ?? $this->destination,
            originAddress: $originAddress ?? $this->originAddress,
            destinationAddress: $destinationAddress ?? $this->destinationAddress,
            items: $items ?? $this->items,
            schedule: $schedule ?? $this->schedule,
            contact: $contact ?? $this->contact,
            requirements: $requirements ?? $this->requirements,
        );
    }
}
