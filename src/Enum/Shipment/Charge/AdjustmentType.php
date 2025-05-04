<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Enum\Shipment\Charge;

enum AdjustmentType: string
{

    /**
     * The default adjustment type that are processed without special meaning
     */
    case ADJUSTMENT = 'ADJUSTMENT';

    /**
     * Used to track base adjustments added to the line-haul.
     * For instance, items.weight, pickup.date, delivery.time, ...
     *
     */
    case BASE = 'BASE';

    /**
     * Used to add charges like Special services,  and so one
     */
    case CHARGE = 'CHARGE';

    case DISCOUNT = 'DISCOUNT';
    
    case TAX = 'TAX';
}
