<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Business;

use Symfony\Component\Uid\Ulid;

trait BusinessClientAsyncEventTrait{
    
    public function getClientId(): ?Ulid{
        return $this->clientId;
    }
}