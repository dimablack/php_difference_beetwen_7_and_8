<?php

namespace App\php_before_8_3vs8_3;

/**
 * PHP < 8.3
 */

class Foo {
    const PHP = 'PHP 8.2';
}

$searchableConstant = 'PHP';

var_dump(constant(Foo::class . "::{$searchableConstant}"));

/***************************************************************************/

/**
 * PHP 8.3
 */

class Foo8_3 {
    const PHP = 'PHP 8.3';
}

$searchableConstant = 'PHP';

var_dump(Foo::{$searchableConstant});
