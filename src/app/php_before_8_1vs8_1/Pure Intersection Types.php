<?php

namespace App\php_before_8_1vs8_1;

/**
 * PHP < 8.1
 */

function count_and_iterate(Iterator $value)
{
    if (!($value instanceof Countable)) {
        throw new TypeError('value must be Countable');
    }

    foreach ($value as $val) {
        echo $val;
    }

    count($value);
}

/***************************************************************************/

/**
 * PHP 8.1
 *
 * Use intersection types when a value needs to satisfy multiple type constraints at the same time.
 *
 * It is not currently possible to mix intersection and union types together such as A&B|C.
 *
 */
function count_and_iterate_8_1(\Iterator&\Countable $value)
{
    foreach ($value as $val) {
        echo $val;
    }

    count($value);
}

