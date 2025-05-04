<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Load;

use Nkamuo\Electrodiscount\TMS\Contract\Entity\Load\Load;
use Nkamuo\Electrodiscount\TMS\Contract\Entity\Load\Template;
use Nkamuo\Electrodiscount\TMS\Contract\Entity\Media\MediaObject;
use Symfony\Component\Validator\Constraints as Assert;

readonly class LoadOutput
{
    public function __construct(
        public ?Template $template = null,
        public ?DimensionDto $dimension = null,
        /** @var LoadFieldValueDto[] */
        public array $fields = [],
        /** @var MediaObject[]  */
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
        /** @var \Nkamuo\Electrodiscount\TMS\Contract\Entity\Media\MediaObject[]|null */
        ?array $images = null,
        ?Template $template = null,
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



    public static function fromEntity(Load $load): self
    {
        return new self(
            template: $load->getTemplate(),
            dimension: ($d = $load->getDimension()) ? DimensionOutput::fromEntity($d) : null,
            fields: array_map(fn($field) => LoadFieldValueDto::fromEntity($field), $load->getFields()->toArray()),
            images: $load->getImages()->toArray(),
            title: $load->getTitle(),
            status: null, //TODO: $load->getStatus(),
            note: null, //$load->getNote(),
            description: null, //$load->getDescription(),
            pickupAddress: null, //$load->getPickupAddress(),
            deliveryAddress: null, //$load->getDeliveryAddress(),
            pickupDate: null, //$load->getPickupDate()?->format('Y-m-d'),
            deliveryDate: null, //$load->getDeliveryDate()?->format('Y-m-d'),
        );
    }
}
