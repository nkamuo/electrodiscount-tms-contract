<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Command\Channel;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Channel\ChannelDto;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints as Assert;

readonly class CreateChannel{
    public function __construct(

        #[Assert\NotNull()]
        public string $type,
        
        #[Assert\NotNull()]
        public ?Ulid $clientId,

        #[Assert\NotNull()]
        #[Assert\Valid()]
        public ?ChannelDto $channel = null,

        public ?Ulid $channelId = null,

        #[Assert\Length(max: 225)]
        public ?string $reason = null,

        #[Assert\Length(max: 500)]
        public ?string $note = null,
    ){}
}