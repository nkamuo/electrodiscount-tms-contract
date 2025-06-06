<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Load;

use Nkamuo\Electrodiscount\TMS\Contract\Dto\Media\MediaObjectDto;
use Symfony\Component\Validator\Constraints as Assert;

readonly class LoadOutput
{
    public function __construct(
        public ?string $template = null,
        public ?DimensionDto $dimension = null,
        /** @var LoadFieldValueDto[] */
        public array $fields = [],
        /** @var MediaObjectDto[]  */
        public array $images = [],
        public ?string $title = null,
        public ?string $status = null,
        #[Assert\Length(max: 255)]
        public ?string $note = null,
        #[Assert\Length(max: 255)]
        public ?string $description = null,
        public ?string $pickupAddress = null,
        public ?string $deliveryAddress = null,
        public ?string $pickupDate = null,
        public ?string $deliveryDate = null,

    ) {}

    public function copyWith(
        ?DimensionDto $dimension = null,
        ?string $title = null,
        ?string $note = null,
        ?string $description = null,
        ?string $pickupAddress = null,
        ?string $deliveryAddress = null,
        ?string $pickupDate = null,
        ?string $deliveryDate = null,
        /** @var LoadFieldValueDto[]|null */
        ?array $fields = null,
        /** @var MediaObjectDto[]|null */
        ?array $images = null,
        ?string $template = null,
        ?string $status = null,
    ): static {
        return new static(
            template: $template ?? $this->template,
            dimension: $dimension ?? $this->dimension,
            fields: $fields ?? $this->fields,
            status: $status ?? $this->status,
            images: $images ?? $this->images,
            title: $title ?? $this->title,
            note: $note ?? $this->note,
            description: $description ?? $this->description,
            pickupAddress: $pickupAddress ?? $this->pickupAddress,
            deliveryAddress: $deliveryAddress ?? $this->deliveryAddress,
            pickupDate: $pickupDate ?? $this->pickupDate,
            deliveryDate: $deliveryDate ?? $this->deliveryDate,
        );
    }
}
