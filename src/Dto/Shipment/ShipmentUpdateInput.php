<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment;

use Symfony\Component\Validator\Constraints as Assert;

readonly class ShipmentUpdateInput{
    public function __construct(
        #[Assert\NotNull()]
        #[Assert\NotBlank()]
        public ?string  $origin = null,
        #[Assert\NotNull()]
        #[Assert\NotBlank()]
        public ?string  $destination = null,
        #[Assert\Type(\DateTimeImmutable::class)]
        public ?\DateTimeImmutable $shipDate = null,
        #[Assert\Type(\DateTimeImmutable::class)]
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

}