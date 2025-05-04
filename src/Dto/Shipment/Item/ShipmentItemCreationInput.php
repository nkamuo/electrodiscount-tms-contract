<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Item;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Load\LoadInput;
use Symfony\Component\Uid\Ulid;


readonly class ShipmentItemCreationInput extends ShipmentItemInput{
    
    public function __construct(
        // public DimensionInput $dimension,
        // public int $weight ,
         int $quantity ,
         ?string $title = null,
         ?LoadInput $load = null,
         ?Ulid $loadId = null,
    ){
        parent::__construct(
            quantity: $quantity,
            title: $title,
            load: $load,
            loadId: $loadId,
        );
    }
}