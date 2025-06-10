<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Business\Client;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Business\Contact\ContactInfoDto;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints as Assert;

readonly class BusinessClientDto{
    
    public function __construct(
        #[Assert\Length(max: 64)]
        public ?string $code = null,
        #[Assert\NotNull()]
        public ?string $name = null,
        #[Assert\NotNull()]
        #[Assert\Valid()]
        public ?ContactInfoDto $contact = null,
        #[Assert\NotNull()]
        public ?Ulid $ownerId = null,
    ){}
}