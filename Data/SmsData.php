<?php

namespace Modules\Notify\Data;

use Spatie\LaravelData\Data;

class SmsData extends Data {
  
    public string $from;
    public string $to;
    public string $body;

}