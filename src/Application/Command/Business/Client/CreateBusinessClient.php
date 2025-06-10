<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Command\Business\Client;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Business\Client\BusinessClientDto;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints as Assert;

readonly class CreateBusinessClient{
    
    public function __construct(
        #[Assert\NotNull()]
        #[Assert\Valid()]
        public ?BusinessClientDto $client = null,
        public ?Ulid $clientId = null,
    ){}
}