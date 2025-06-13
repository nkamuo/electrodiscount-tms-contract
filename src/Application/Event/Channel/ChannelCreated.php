<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Channel;

use Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Business\BusinessClientAsyncEvent;
use Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Business\BusinessClientAsyncEventTrait;
use Nkamuo\Electrodiscount\TMS\Contract\Dto\Channel\ChannelDto;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints as Assert;

readonly class ChannelCreated implements BusinessClientAsyncEvent
{
    use BusinessClientAsyncEventTrait;
    public function __construct(

        #[Assert\NotNull()]
        public string $type,

        #[Assert\NotNull()]
        #[Assert\Valid()]
        public ?ChannelDto $channel = null,

        #[Assert\NotNull()]
        public ?Ulid $channelId = null,

        #[Assert\NotNull()]
        public ?Ulid $clientId = null,

        #[Assert\Length(max: 225)]
        public ?string $reason = null,

        #[Assert\Length(max: 500)]
        public ?string $note = null,
    ){}
}