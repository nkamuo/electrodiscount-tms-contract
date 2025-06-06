<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Requirement;

use Symfony\Component\Uid\Ulid;

readonly class RequirementOutput{
    public function __construct(
        public Ulid $id,
        public ?string $name = null,
        public ?string $title = null,
        public ?string $subtitle = null,
        public ?string $iconName = null,
        public ?string $iconImgSrc = null,
    ){}
}
