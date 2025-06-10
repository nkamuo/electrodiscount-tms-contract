<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Command\Business\Assignemt;

use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints as Assert;

readonly class AcceptBusinessClientAssignment{
    
    public function __construct(
        #[Assert\NotNull()]
        public ?Ulid $assignmentId = null,
        #[Assert\Length(max: 225)]
        public ?string $reason = null,
        #[Assert\Length(max: 225)]
        public ?string $note = null,
    ){}
}