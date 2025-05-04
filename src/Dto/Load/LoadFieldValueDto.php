<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Load;

use Nkamuo\Electrodiscount\TMS\Contract\Entity\Load\Field\Field;
use Nkamuo\Electrodiscount\TMS\Contract\Entity\Load\FieldValue;

readonly class LoadFieldValueDto{
    public function __construct(
        // public string $name,
        public string $field,
        public mixed $value = null,
        
    ){

    }



    // public static function fromEntity(FieldValue $value): static{
    //     return new static(
    //         field: $value->getField(),
    //         value: $value->getValue(),
    //     );
    // }
}