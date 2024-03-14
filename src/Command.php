<?php

namespace App;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command as BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:repro')]
class Command extends BaseCommand
{
    public function __construct(NonsharedService $nonshared, PublicService $public) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        return Command::SUCCESS;
    }
}
