<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Addressing;

use Symfony\Component\Validator\Constraints as Assert;

readonly class AddressDto
{
    public function __construct(
        public  ?string $company,
        #[Assert\Length(min: 2, max: 255)]
        #[Assert\NotBlank]
        #[Assert\NotNull()]
        #[Assert\Regex(
            pattern: '/^[a-zA-Z0-9\s.,-]+$/',
            message: 'The street address can only contain letters, numbers, spaces, and the following characters: ., -'
        )]
        public  ?string $street,
        #[Assert\NotBlank]
        #[Assert\NotNull()]
        #[Assert\Length(min: 2, max: 10)]
        #[Assert\Regex(
            pattern: '/^[a-zA-Z0-9\s-]+$/',
            message: 'The postcode can only contain letters, numbers, and spaces.'
        )]
        #[Assert\Length(min: 2, max: 10)]
        public  ?string $postcode,
        #[Assert\NotBlank]
        #[Assert\NotNull()]
        #[Assert\Length(min: 2, max: 255)]
        public  ?string $city,
        #[Assert\NotBlank]
        #[Assert\NotNull()]
        #[Assert\Length(min: 2, max: 3)]
        public  ?string $country,
        #[Assert\Length(min: 2, max: 255)]
        public  ?string $province = null,
        public array $metadata = [],
        // 
        // ?string $countryCode = null,
        // ?string $company = null,
    ) {
        // if (!$this->country) {
        //     $this->country = $countryCode ?? $country;
        // }
        // if (!$this->name) {
        //     $this->name = $company;
        // }
    }


    public function copyWith(
        ?string $company = null,
        ?string $street = null,
        ?string $postcode = null,
        ?string $city = null,
        ?string $country = null,
        ?string $province = null,
        ?array $metadata = null,
    ): self {
        return new self(
            company: $company ?? $this->company,
            street: $street ?? $this->street,
            postcode: $postcode ?? $this->postcode,
            city: $city ?? $this->city,
            country: $country ?? $this->country,
            province: $province ?? $this->province,
            metadata: $metadata ?? $this->metadata,
        );
    }

    // public function toModel(): Address
    // {
    //     $address = new Address();
    //     $address
    //         // ->setCompany($this->name)
    //         // ->setStreet($this->street)
    //         // ->setPostcode($this->postcode)
    //         ->setStreetLine1($this->street)
    //         ->setStreetLine2($this->company)
    //         ->setPostalCode($this->postcode)

    //         ->setCity($this->city)
    //         ->setProvinceName($this->province)
    //         ->setCountryCode($this->country)
    //     ;

    //     foreach ($this->metadata as $key => $value) {
    //         $address->setMetadata($key, $value);
    //     }

    //     return $address;
    // }


    // public static function fromModel(Address $address): self
    // {
    //     return  new self(
    //         company: $address->getStreetLine2(),
    //         street: $address->getStreetLine1(),
    //         postcode: $address->getPostalCode(),
    //         city: $address->getCity(),
    //         province: $address->getProvinceName() ?? $address->getProvinceCode(),
    //         country: $address->getCountry(),
    //         metadata: $address->getAllMetadata(),
    //     );
    // }
}
