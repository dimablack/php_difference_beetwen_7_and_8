<?php

namespace App\php_before_8_3vs8_3;

/**
 * PHP < 8.3
 */

interface I {
    // We may naively assume that the PHP constant is always a string.
    const PHP = 'PHP 8.2';
}

class Foo implements I {
    // But implementing classes may define it as an array.
    const PHP = [];
}

/***************************************************************************/

/**
 * PHP 8.3
 */

interface I2 {
    const string PHP = 'PHP 8.3';
}

class Foo2 implements I {
    const string PHP = [];
}

// Fatal error: Cannot use array as value for class constant
// Foo::PHP of type string
