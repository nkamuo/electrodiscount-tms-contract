<?php

namespace Nkamuo\Electrodiscount\TMS\Contract\Dto\Core;


readonly class MoneyOutput
{

    public function __construct(
        public string $currency,
        public int $amount,
    ) {}
}
