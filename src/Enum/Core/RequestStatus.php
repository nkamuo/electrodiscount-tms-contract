<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Enum\Core;


enum RequestStatus: string
{
    case DRAFT = 'DRAFT';
    case PENDING = 'PENDING';
    case ACCEPTED = 'ACCEPTED';
    case REJECTED = 'REJECTED';


    public function toAction(): string
    {
        return match ($this) {
            self::DRAFT => 'core.action.request.draft',
            self::PENDING => 'core.action.request.submit',
            self::ACCEPTED => 'core.action.request.accept',
            self::REJECTED => 'core.action.request.rejected',
        };
    }
}
