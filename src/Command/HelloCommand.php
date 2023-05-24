<?php

namespace Devgine\Demo\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloCommand extends Command
{
    protected static $defaultName = 'devgine:demo:hello';

    protected function configure(): void
    {
        $this
            // the command help shown when running the command with the "--help" option
            ->setHelp('Hello command.')
        ;
    }

    /** @SuppressWarnings(PHPMD.UnusedFormalParameter) */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('<info>Devgine demo is installed.</info>');

        return Command::SUCCESS;
    }
}
