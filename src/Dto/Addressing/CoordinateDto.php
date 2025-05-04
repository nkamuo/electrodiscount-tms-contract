<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Addressing;

readonly class CoordinateDto
{
    public function __construct(
        public  float $latitude,
        public  float $longitude,
        public  ?float $altitude = null,
        public  ?float $speed = null,
        public  ?float $heading = null,
        public  ?float $accuracy = null,
    ) {
    }


    // public function toModel(): Coordinate{
    //     return new Coordinate(
    //         latitude: $this->latitude,
    //         longitude: $this->longitude,
    //         altitude: $this->altitude,
    //         // 
    //         accuracy: $this->accuracy,
            
    //     );
    // }

    // public static function fromModel(Coordinate $input): self{
    //     return new static(
    //         latitude: $input->getLatitude(),
    //         longitude: $input->getLongitude(),
    //         altitude: $input->getAltitude(),
    //         // 
    //         accuracy: $input->getAccuracy(),
            
    //     );
    // }
}
