<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Media;

use Symfony\Component\Uid\Ulid;

readonly class MediaObjectDto
{

    public function __construct(
        public ?Ulid $id = null,
        public ?string $mimeType = null,
        public ?string $originalName = null,
        public ?string $contentUrl = null,
        public ?int $size = null,
    ) {}

    public function copyWith(
        ?Ulid $id = null,
        ?string $mimeType = null,
        ?string $originalName = null,
        ?string $contentUrl = null,
        ?int $size = null,
    ): static {
        return new static(
            id: $id ?? $this->id,
            mimeType: $mimeType ?? $this->mimeType,
            originalName: $originalName ?? $this->originalName,
            contentUrl: $contentUrl ?? $this->contentUrl,
            size: $size ?? $this->size,
        );
    }
}
