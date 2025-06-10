<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Business;

use Symfony\Component\Uid\Ulid;

interface BusinessClientAsyncEvent{
    
    public function getClientId(): ?Ulid;
}