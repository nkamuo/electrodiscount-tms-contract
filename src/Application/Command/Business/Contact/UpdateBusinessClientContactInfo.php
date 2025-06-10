<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Command\Business\Contact;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Business\Contact\ContactInfoDto;
use Symfony\Component\Uid\Ulid;
use Symfony\Component\Validator\Constraints\Valid;

readonly class UpdateBusinessClientContactInfo{
    public function __construct(
        public Ulid $clientId,
        #[Valid()]
        public ContactInfoDto $contact,
        public ?string $reason = null,
        public ?string $note = null,

    ){}
}