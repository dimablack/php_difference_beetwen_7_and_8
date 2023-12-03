<?php

namespace App\php_before_8_1vs8_1;

/**
 * PHP < 8.1
 */

$foo = [$this, 'foo'];

$fn = Closure::fromCallable('strlen');

/***************************************************************************/

/**
 * PHP 8.1
 *
 * It is now possible to get a reference to any function – this is called first-class callable syntax.
 *
 */

$foo = $this->foo(...);

$fn = strlen(...);
