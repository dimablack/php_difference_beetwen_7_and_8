<?php

namespace App\php_7vs8_0;

/**
 * PHP 7
 */

0 == "false"; // true

/***************************************************************************/

/**
 * PHP 8.0
 *
 * When comparing to a numeric string, PHP 8 uses a number comparison.
 * Otherwise, it converts the number to a string and uses a string comparison.
 *
 */

0 == "false"; // false
