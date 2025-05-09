<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Media;

use Symfony\Component\Uid\Ulid;

readonly class MediaObjectDto{
    
    public function __construct(
        public ?Ulid $id = null,
        public ?string $mimeType = null,
        public ?string $originalName = null,
        public ?string $contentUrl = null,
        public ?int $size = null,
    ){}
}