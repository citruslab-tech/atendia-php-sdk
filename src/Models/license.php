<?php

namespace AtendiaSdk\Models;

class License
{
    public function __construct(
        private string $name,
        private string $code,
        private string $description,
        private string $trial_period_days,
        private string $trial_start_date,
        private string $trial_end_date,
        private string $st
    ) {}
}
