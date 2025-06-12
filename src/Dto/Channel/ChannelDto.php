<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Channel;

use Symfony\Component\Validator\Constraints as Assert;

readonly class ChannelDto
{
    public function __construct(
        #[Assert\NotNull(
            groups: ['submit', 'authorize']
        )]
        public ?string $title = null,

        // #[Assert\NotNull()]
        public ?string $subtitle = null,

        #[Assert\Length(max: 225)]
        public ?string $icon = null,

        #[Assert\Valid()]
        public ?array $metadata = null,

        #[Assert\Valid()]
        public ?array $credentials = null,

        #[Assert\Url()]
        public ?string $externalUrl = null,

        #[Assert\Length(max: 255)]
        public ?string $source = null,
    ) {}
}
