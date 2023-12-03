<?php

namespace App\php_7vs8_0;

$string = 'some_string';

/**
 * PHP 7
 */

htmlspecialchars($string, ENT_COMPAT | ENT_HTML401, 'UTF-8', false);

/***************************************************************************/

/**
 * PHP 8.0
 *
 * Specify only required parameters, skipping optional ones.
 *
 * Arguments are order-independent and self-documented.
 *
 */

htmlspecialchars($string, double_encode: false);
