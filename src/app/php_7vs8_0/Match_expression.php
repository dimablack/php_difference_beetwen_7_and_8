<?php

namespace App\php_7vs8_0;

/**
 * PHP 7
 */

switch (8.0) {
    case '8.0':
        $result = "Oh no!";
        break;
    case 8.0:
        $result = "This is what I expected";
        break;
}
echo $result;
//> Oh no!

/***************************************************************************/

/**
 * PHP 8.0
 *
 * The new match is similar to switch and has the following features:
 *
 * - Match is an expression, meaning its result can be stored in a variable or returned.
 * - Match branches only support single-line expressions and do not need a break; statement.
 * - Match does strict comparisons.
 *
 */
echo match(8.0) {
    '8.0' => "Oh no!",
    8.0 => "This is what I expected",

};
//> This is what I expected

