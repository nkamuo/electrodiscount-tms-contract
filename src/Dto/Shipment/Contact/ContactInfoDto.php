<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Contact;

// use Nkamuo\Electrodiscount\TMS\Contract\Entity\Shipment\ContactInfo;
use Nkamuo\Electrodiscount\TMS\Contract\Enum\Shipment\Contact\ContactInfoType;
use Symfony\Component\Validator\Constraints as Assert;

readonly class ContactInfoDto{
    public function __construct(
        #[Assert\NotNull()]
        public ?string $firstName = null,
        #[Assert\NotNull()]
        public ?string $lastName = null,
        #[Assert\NotNull()]
        #[Assert\Email()]
        public ?string $emailAddress = null,
        #[Assert\NotNull()]
        // #[Assert\Regex()]
        public ?string $phoneNumber = null,
        public ?ContactInfoType $type = ContactInfoType::INDIVIDUAL,
        #[Assert\When(
            expression: 'this.type?.name == \'BUSINESS\'',
            constraints:[
                new Assert\NotNull(),
            ]
        )]
        #[Assert\Valid()]
        public ?BusinessContactInfoDto $business = null,

    ){}


    // public function toModel(): ContactInfo{
    //     return (new ContactInfo)
    //     ->setFirstName($this->firstName)
    //     ->setLastName($this->lastName)
    //     ->setEmailAddress($this->emailAddress)
    //     ->setPhoneNumber($this->phoneNumber)
    //     ->setType($this->type)
    //     ->setBusiness($this->business?->toModel());
    // }



    // public static function fromModel(ContactInfo $contactInfo): self{
    //     return new self(
    //         firstName: $contactInfo->getFirstName(),
    //         lastName: $contactInfo->getLastName(),
    //         emailAddress: $contactInfo->getEmailAddress(),
    //         phoneNumber: $contactInfo->getPhoneNumber(),
    //         type: $contactInfo->getType(),
    //         business: (($business = $contactInfo->getBusiness()) && $contactInfo->getType() == ContactInfoType::BUSINESS)? BusinessContactInfoDto::fromModel($business) : null,
    //     );
    // }
}