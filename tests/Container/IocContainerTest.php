<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use lazywe\citest\Container\IocContainer;

class IocContainerTest extends TestCase
{
    public function testIocContainerDebug(): void
    {
        $ioc = new IocContainer();
        $ioc->debug = function () {
            return true;
        };
        $this->assertEquals(true, $ioc->debug);
    }

    
    public function testIocContainerFalseDebug(): void
    {
        $ioc = new IocContainer();
        $ioc->debug = function () {
            return false;
        };
        $this->assertEquals(false, $ioc->debug);
    }

    public function testIocContainerIsClosure(): void
    {
        $ioc = new IocContainer();
        $ioc->debug = function () {
            return true;
        };
        $this->assertEquals(false, $ioc->debug instanceof Closure);
    }
}

