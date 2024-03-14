<?php

namespace App;

use Psr\Log\LoggerInterface;

class Service2
{
    public function __construct(Service1 $service1, LoggerInterface $logger) {}
}
