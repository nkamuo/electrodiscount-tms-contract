<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment;

use Symfony\Component\Validator\Constraints as Assert;

readonly class ShipmentDto{
    public function __construct(
        #[Assert\NotNull()]
        #[Assert\NotBlank()]
        public ?string  $origin = null,
        #[Assert\NotNull()]
        #[Assert\NotBlank()]
        public ?string  $destination = null,
    ){}



    public function  copyWith(
         ?string  $origin = null,
          ?string  $destination = null,
    ): self{
        return new self(
            origin: $origin  ?? $this->origin,
            destination: $destination ?? $this->destination,
        );
    }

}