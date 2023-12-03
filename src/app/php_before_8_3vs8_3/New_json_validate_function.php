<?php

namespace App\php_before_8_3vs8_3;

/**
 * PHP < 8.3
 */

function json_validate(string $string): bool {
    json_decode($string);

    return json_last_error() === JSON_ERROR_NONE;
}

var_dump(json_validate('{ "test": { "foo": "bar" } }')); // true

/***************************************************************************/

/**
 * PHP 8.3
 *
 * json_validate() allows to check if a string is syntactically valid JSON, while being more efficient than json_decode().
 *
 */

var_dump(json_validate('{ "test": { "foo": "bar" } }')); // true
