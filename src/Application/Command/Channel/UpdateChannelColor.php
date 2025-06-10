<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Command\Channel;

use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints as Assert;

readonly class UpdateChannelColor
{
    public function __construct(

        #[Assert\NotNull()]
        public Ulid $channelId,

        #[Assert\Length(max: 225)]
        public ?string $color = null,

        #[Assert\Length(max: 225)]
        public ?string $reason = null,

        #[Assert\Length(max: 500)]
        public ?string $note = null,
    ) {}
}
