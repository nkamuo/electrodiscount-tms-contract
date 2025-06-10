<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Enum\Channel;


enum ChannelStatus: string
{
    case PENDING = 'PENDING';
    case ACTIVE = 'ACTIVE';
    case SUSPENDED = 'SUSPENDED';

    case REJECTED = 'REJECTED';


    public function toAction(): string
    {
        return match ($this) {
            self::PENDING => 'core.action.verification.draft',
            self::ACTIVE => 'core.action.verification.accept',
            self::SUSPENDED => 'core.action.verification.suspend',
            self::REJECTED => 'core.action.verification.rejected',
        };
    }
}
