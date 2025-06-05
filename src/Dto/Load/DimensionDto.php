<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Load;

use Nkamuo\Electrodiscount\TMS\Contract\Entity\Load\Dimension;
use Symfony\Component\Validator\Constraints\NotNull;

readonly class DimensionDto{
    public function __construct(
        #[NotNull()]
        public ?float $length = null,
        #[NotNull()]
        public ?float $width = null,
        #[NotNull()]
        public ?float $height = null,
        public ?string $unit = null,
    ){

    }


    public function copyWith(
        ?float $length = null,
        ?float $width = null,
        ?float $height = null,
        ?string $unit = null,
    ): static{
        return new static(
            length: $length ?? $this->length,
            width: $width ?? $this->width,
            height: $height ?? $this->height,
            unit: $unit ?? $this->unit,
        );
    }

    // public static function fromEntity(Dimension $dimension): static{
    //     return new static(
    //         length: $dimension->getLength(),
    //         width: $dimension->getWidth(),
    //         height: $dimension->getHeight(),
    //         unit: $dimension->getUnit(),
    //     );
    // }
}