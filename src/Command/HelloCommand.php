<?php

namespace Devgine\Demo\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'devgine:demo:hello',
    description: 'Hello command'
)]
class HelloCommand extends Command
{
    /** @SuppressWarnings(PHPMD.UnusedFormalParameter) */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('<info>Devgine demo is installed.</info>');

        return Command::SUCCESS;
    }
}
