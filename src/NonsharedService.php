<?php

namespace App;

class NonsharedService
{
    public function __construct(
        Service2 $service2,
    ) {}
}
