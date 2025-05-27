<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Enum\Payment;

enum PaymentStatus: string
{
    case PENDING = 'PENDING';
    case IN_PROGRESS = 'IN_PROGRESS';
    case CAPTURED = 'CAPTURED';
    case FAILED = 'FAILED';

}
