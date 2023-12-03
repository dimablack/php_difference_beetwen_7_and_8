<?php

namespace App\php_before_8_1vs8_1;

/**
 * PHP < 8.1
 */

$arrayA = ['a' => 1];
$arrayB = ['b' => 2];

$result = array_merge(['a' => 0], $arrayA, $arrayB);

// ['a' => 1, 'b' => 2]

/***************************************************************************/

/**
 * PHP 8.1
 *
 * PHP supported unpacking inside arrays through the spread operator before, but only if the arrays had integer keys.
 * Now it is possible to unpack arrays with string keys too.
 *
 */

$arrayA = ['a' => 1];
$arrayB = ['b' => 2];

$result = ['a' => 0, ...$arrayA, ...$arrayB];

// ['a' => 1, 'b' => 2]
