<?php
namespace Nkamuo\Electrodiscount\TMS\Contract\Application\Event\Status;

use Brick\DateTime\LocalDate;
use Nkamuo\Electrodiscount\TMS\Contract\Application\Event\ShipmentAsyncEvent;
use Nkamuo\Electrodiscount\TMS\Contract\Dto\Time\TimeRangeOutput;
use Symfony\Component\Uid\Ulid;

readonly class ShipmentScheduled implements ShipmentAsyncEvent{
    public function __construct(
        public Ulid $shipmentId,
        public ?LocalDate $date = null,
        public ?TimeRangeOutput $time = null,
        public ?string $note = null,
        public ?\DateTimeImmutable $occuredAt = null,
    ){}
}