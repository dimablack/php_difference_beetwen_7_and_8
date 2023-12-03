<?php

namespace App\php_7vs8_0;

/**
 * PHP 7
 */
class Number7
{
    /** @var int|float */
    private $number;

    /**
     * @param float|int $number
     */
    public function __construct($number)
    {
        $this->number = $number;
    }
}

new Number7('NaN'); // Ok

/***************************************************************************/

/**
 * PHP 8.0
 *
 * Instead of PHPDoc annotations for a combination of types, you can use native union type declarations that are validated at runtime.
 *
 */
class Number8
{
    public function __construct(
        private int|float $number
    )
    {
    }
}

new Number8('NaM'); // TypeError
