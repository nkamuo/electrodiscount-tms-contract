<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment;

use Nkamuo\Electrodiscount\TMS\Contract\Entity\Shipment\Shipment;

readonly class ShipmentOutput{
    public function __construct(
        public ?string  $origin = null,
        public ?string  $destination = null,
        public ?\DateTimeImmutable $shipDate = null,
        public ?\DateTimeImmutable $estimatedDelivery = null,
    ){}



    public function  copyWith(
         ?string  $origin = null,
          ?string  $destination = null,
          ?\DateTimeImmutable $shipDate = null,
          ?\DateTimeImmutable $estimatedDelivery = null,
    ): self{
        return new self(
            origin: $origin  ?? $this->origin,
            destination: $destination ?? $this->destination,
            shipDate: $shipDate ?? $this->shipDate,
            estimatedDelivery: $estimatedDelivery ?? $this->estimatedDelivery,
        );
    }



    public static function fromInput(ShipmentCreationInput $input): self{
        return new self(
            origin: $input->origin,
            destination: $input->destination,
            shipDate: $input->shipDate,
            estimatedDelivery: $input->estimatedDelivery,
        );
    }

    public static function fromEntity(Shipment $shipment): self{
        return new self(
            origin:  $shipment->getOrigin()?->__toString(),
            destination:  $shipment->getDestination()?->__toString(),
            shipDate: $shipment->getShipDate(),
            estimatedDelivery: $shipment->getEstimatedDelivery(),
        );
    }
}