<?php

namespace Devgine\Demo\Tests\Command;

use Devgine\Demo\Command\HelloCommand;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

class HelloCommandTest extends TestCase
{
    public function testExecute()
    {
        $application = new Application();
        $application->add(new HelloCommand());
        $command = $application->find('devgine:demo:hello');
        $commandTester = new CommandTester($command);

        $code = $commandTester->execute([]);

        $this->assertEquals(0, $code);
        $this->assertStringContainsString('Devgine demo is installed.', $commandTester->getDisplay());
    }
}
