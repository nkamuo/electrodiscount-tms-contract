<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Shipment\Navigation;

readonly class ShipmentStepOutput{


    public const STEP_SELECT_STOPS = 'stops.select';
    public const STEP_SELECT_ORIGIN = 'origin.select';
    public const STEP_SELECT_DESTINATION = 'destination.select';
    public const STEP_PICKUP_DATE = 'pickup.date';
    public const STEP_PICKUP_TIME = 'pickup.time';
    public const STEP_PICKUP_ADDRESS = 'pickup.address';
    public const STEP_DELIVERY_DATE = 'delivery.date';
    public const STEP_DELIVERY_TIME = 'delivery.time';
    public const STEP_DELIVERY_ADDRESS = 'delivery.address';
    public const STEP_SHIPMENT_REQUIREMENT = 'shipment.requirement';
    public const STEP_SHIPMENT_CONTACT = 'shipment.contact';
    public const STEP_SHIPMENT_ITEMS = 'shipment.items';
    public const STEP_SHIPMENT_SUMMARY = 'shipment.summary';
    public const STEP_SHIPMENT_PAYMENT = 'shipment.payment';
    public const STEP_SHIPMENT_CONFIRMATION = 'shipment.confirmation';



    public function __construct(
        public string $name,
        public string $title,
        public string $subtitle,
        public string $icon,
        public ?string $route = null,
        public bool $completed = false,
        public bool $active = false,
        public bool $disabled = false,
        public array $params = [],
        public ?string $status = null,
        public ?string $message = null,
    ) {
    }

}