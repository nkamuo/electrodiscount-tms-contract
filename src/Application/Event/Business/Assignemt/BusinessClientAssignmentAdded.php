<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Business\Assignemt;

use Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Business\BusinessClientAsyncEvent;
use Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Business\BusinessClientAsyncEventTrait;
use Nkamuo\Electrodiscount\TMS\Contract\Enum\Business\Assignment\BusinessAssignmentStatus;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints as Assert;

readonly class BusinessClientAssignmentAdded implements BusinessClientAsyncEvent{
    use BusinessClientAsyncEventTrait;
    
    public function __construct(
        #[Assert\NotNull()]
        public ?Ulid $assignmentId = null,
        #[Assert\NotNull()]
        public ?Ulid $clientId = null,
        #[Assert\NotNull()]
        public ?Ulid $userId = null,
        #[Assert\NotNull()]
        public ?Ulid $roleId = null,
        public ?BusinessAssignmentStatus $status = null,
        #[Assert\Length(max: 225)]
        public ?string $reason = null,
        #[Assert\Length(max: 225)]
        public ?string $note = null,
    ){}


    // public function copyWith(){}
}