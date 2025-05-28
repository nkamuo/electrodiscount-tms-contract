<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Enum\Shipment;

enum ShipmentStatus: string
{
    case PENDING = 'PENDING';

    case SCHEDULED = 'SCHEDULED';

    case IN_PROGRESS = 'IN_PROGRESS';

    case ON_HOLD = 'ON_HOLD';
    // 
    case IN_TRANSIT = 'IN_TRANSIT';

    case DELIVERED = 'DELIVERED';

    case COMPLETED = 'COMPLETED';
    
    case FAILED = 'FAILED';
    
    case CLOSED = 'CLOSED';
}
