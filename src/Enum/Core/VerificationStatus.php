<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Enum\Core;


enum VerificationStatus: string
{
    case PENDING = 'PENDING';
    case IN_PROGRESS = 'IN_PROGRESS';
    case ACCEPTED = 'ACCEPTED';
    case REJECTED = 'REJECTED';


    public function toAction(): string
    {
        return match ($this) {
            self::PENDING => 'core.action.verification.draft',
            self::IN_PROGRESS => 'core.action.verification.start',
            self::ACCEPTED => 'core.action.verification.accept',
            self::REJECTED => 'core.action.verification.rejected',
        };
    }
}
