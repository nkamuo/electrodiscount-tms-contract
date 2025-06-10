<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Channel;

use Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Business\BusinessClientAsyncEvent;
use Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Business\BusinessClientAsyncEventTrait;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints as Assert;

readonly class ChannelSuspended  implements BusinessClientAsyncEvent
{
    use BusinessClientAsyncEventTrait;
    public function __construct(

        #[Assert\NotNull()]
        public ?Ulid $channelId = null,

        public ?Ulid $clientId = null,

        #[Assert\Length(max: 225)]
        public ?string $reason = null,

        #[Assert\Length(max: 500)]
        public ?string $note = null,
    ) {}
}
