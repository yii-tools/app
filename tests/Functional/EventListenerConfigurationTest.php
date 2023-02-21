<?php

declare(strict_types=1);

namespace App\Tests\Functional;

use PHPUnit\Framework\TestCase;
use Yiisoft\Yii\Event\ListenerConfigurationChecker;
use Yiisoft\Yii\Runner\Console\ConsoleApplicationRunner;

use function dirname;

final class EventListenerConfigurationTest extends TestCase
{
    public function testConsoleListenerConfiguration(): void
    {
        $runner = new ConsoleApplicationRunner(
            rootPath: dirname(__DIR__, 2),
            debug: false,
            checkEvents: false,
        );
        $container = $runner->getContainer();
        $checker = $container->get(ListenerConfigurationChecker::class);

        self::assertInstanceOf(ListenerConfigurationChecker::class, $checker);
    }
}
