<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Command\Business\Client;

use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints as Assert;

readonly class RejectBusinessClient{
    
    public function __construct(
        #[Assert\NotNull()]
        public ?Ulid $clientId = null,
        #[Assert\Length(max: 225)]
        public ?string $reason = null,
        #[Assert\Length(max: 225)]
        public ?string $note = null,
    ){}
}