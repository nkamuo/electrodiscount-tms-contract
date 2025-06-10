<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Business\Contact;

use Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Business\BusinessClientAsyncEvent;
use Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Business\BusinessClientAsyncEventTrait;
use Nkamuo\Electrodiscount\TMS\Contract\Dto\Business\Contact\ContactInfoDto;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints\Valid;

readonly class BusinessClientContactInfoUpdated implements BusinessClientAsyncEvent{

    use BusinessClientAsyncEventTrait;
    
    public function __construct(
        public Ulid $clientId,
        #[Valid()]
        public ContactInfoDto $contact,
        public ?string $reason = null,
        public ?string $note = null,

    ){}
}