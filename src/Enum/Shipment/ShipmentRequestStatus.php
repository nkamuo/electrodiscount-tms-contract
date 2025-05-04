<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Enum\Shipment;

enum ShipmentRequestStatus: string
{
    case DRAFT = 'DRAFT';

    case SUBMITTED = 'SUBMITTED';

    case ACCEPTED = 'ACCEPTED';

    case REJECTED = 'REJECTED';

    // 

    case CANCELLATION_REQUESTED = 'CANCELLATION_REQUESTED';

    case CANCELLATION_ACCEPTED = 'CANCELLATION_ACCEPTED';

    case CANCELLATION_REJECTED = 'CANCELLATION_REJECTED';

    // 

    case CLOSED = 'CLOSED';
}
