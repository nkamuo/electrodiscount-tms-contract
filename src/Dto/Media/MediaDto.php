<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Media;

use Symfony\Component\Uid\Ulid;

readonly class MediaDto{
    
    public function __construct(
        public ?Ulid $id = null,
        public ?string $mimeType = null,
        public ?string $name = null,
        public ?string $url = null,
        public ?int $size = null,
    ){}
}