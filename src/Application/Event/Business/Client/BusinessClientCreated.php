<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Business\Client;

use Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Business\BusinessClientAsyncEvent;
use Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Business\BusinessClientAsyncEventTrait;
use Nkamuo\Electrodiscount\TMS\Contract\Dto\Business\Client\BusinessClientDto;
use Symfony\Component\Validator\Constraints as Assert;

readonly class BusinessClientCreated implements BusinessClientAsyncEvent{
    use BusinessClientAsyncEventTrait;
    
    public function __construct(
        #[Assert\NotNull()]
        #[Assert\Valid()]
        public ?BusinessClientDto $business = null,
    ){}
}