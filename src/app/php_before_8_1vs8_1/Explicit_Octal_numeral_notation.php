<?php

namespace App\php_before_8_1vs8_1;

/**
 * PHP < 8.1
 */

016 === 16; // false because `016` is octal for `14` and it's confusing
016 === 14; // true

/***************************************************************************/

/**
 * PHP 8.1
 *
 * It is now possible to write octal numbers with the explicit 0o prefix.
 *
 */

0o16 === 16; // false — not confusing with explicit notation
0o16 === 14; // true
