<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Business\Contact;

use Nkamuo\Electrodiscount\TMS\Contract\Entity\Shipment\Shipment\BusinessInfo;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints as Assert;

readonly class BusinessContactInfoDto{
    public function __construct(
        
        // public ?Ulid $id = null,
        
        #[Assert\NotNull()]
        #[Assert\NotBlank()]
        #[Assert\Length(max: 255)]
        public ?string $name = null,

        #[Assert\Length(min: 10, max: 15)]
        public ?string $cocNumber = null,

        #[Assert\Length(min: 10, max: 15)]
        public ?string $vatNumber = null,

        #[Assert\NotNull()]
        public ?string $street = null,

        #[Assert\NotNull()]
        public ?string $postcode = null,

        #[Assert\NotNull()]
        public ?string $locality = null,

        #[Assert\NotNull()]
        #[Assert\Length(exactly: 2)]
        public ?string $country = null,
        
    ){}


    // public function toModel(): BusinessInfo{
    //     return (new BusinessInfo())
    //         ->setName($this->name)
    //         ->setCocNumber($this->cocNumber)
    //         ->setVatNumber($this->vatNumber)
    //         ->setStreet($this->street)
    //         ->setPostcode($this->postcode)
    //         ->setLocality($this->locality)
    //         ->setCountry($this->country)
    //         ;
    // }



    // public static function fromModel(BusinessInfo $businessInfo): self{
    //     return new self(
    //         name: $businessInfo->getName(),
    //         cocNumber: $businessInfo->getCocNumber(),
    //         vatNumber: $businessInfo->getVatNumber(),
    //         street: $businessInfo->getStreet(),
    //         postcode: $businessInfo->getPostcode(),
    //         locality: $businessInfo->getLocality(),
    //         country: $businessInfo->getCountry(),
    //     );
    // }
}