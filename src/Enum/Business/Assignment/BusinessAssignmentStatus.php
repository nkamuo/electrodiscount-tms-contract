<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Enum\Business\Assignment;


enum BusinessAssignmentStatus: string
{
    case PENDING = 'PENDING';
    case ACCEPTED = 'ACCEPTED';
    case REJECTED = 'REJECTED';


    public function toAction(): string
    {
        return match ($this) {
            self::PENDING => 'core.action.verification.draft',
            self::ACCEPTED => 'core.action.verification.accept',
            self::REJECTED => 'core.action.verification.rejected',
        };
    }
}
