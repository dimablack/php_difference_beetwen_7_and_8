<?php

namespace App\php_before_8_3vs8_3;

/**
 * PHP < 8.3
 */

class PHP {
    public string $version = '8.2';
}

readonly class Foo {
    public function __construct(
        public PHP $php
    ) {}

    public function __clone(): void {
        $this->php = clone $this->php;
    }
}

$instance = new Foo(new PHP());
$cloned = clone $instance;

// Fatal error: Cannot modify readonly property Foo::$php

/***************************************************************************/

/**
 * PHP 8.3
 *
 * readonly properties may now be modified once within the magic __clone method to enable deep-cloning of readonly properties.
 *
 */

class PHP8_3 {
    public string $version = '8.2';
}

readonly class Foo8_3 {
    public function __construct(
        public PHP $php
    ) {}

    public function __clone(): void {
        $this->php = clone $this->php;
    }
}

$instance = new Foo8_3(new PHP8_3());
$cloned = clone $instance;

$cloned->php->version = '8.3';
