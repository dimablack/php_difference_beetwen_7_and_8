<?php

namespace App\php_before_8_3vs8_3;

/**
 * PHP < 8.3
 */

use PHPUnit\Framework\TestCase;

final class MyTest extends TestCase {
    protected $logFile;

    protected function setUp(): void {
        $this->logFile = fopen('/tmp/logfile', 'w');
    }

    protected function taerDown(): void {
        fclose($this->logFile);
        unlink('/tmp/logfile');
    }
}

// The log file will never be removed, because the
// method name was mistyped (taerDown vs tearDown).

/***************************************************************************/

/**
 * PHP 8.3
 *
 * By adding the #[\Override] attribute to a method, PHP will ensure that a method with the same name exists
 * in a parent class or in an implemented interface. Adding the attribute makes it clear that overriding
 * a parent method is intentional and simplifies refactoring, because the removal of an overridden parent method will be detected.
 *
 */

use PHPUnit\Framework\TestCase;

final class MyTest8_3 extends TestCase {
    protected $logFile;

    protected function setUp(): void {
        $this->logFile = fopen('/tmp/logfile', 'w');
    }

    #[\Override]
    protected function taerDown(): void {
        fclose($this->logFile);
        unlink('/tmp/logfile');
    }
}

// Fatal error: MyTest::taerDown() has #[\Override] attribute,
// but no matching parent method exists
