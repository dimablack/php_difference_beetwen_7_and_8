<?php

namespace App\php_7vs8_0;

/**
 * PHP 7
 */
class Point7
{
    public float $x;
    public float $y;
    public float $z;

    public function __construct(
        float $x = 0.0,
        float $y = 0.0,
        float $z = 0.0
    )
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
}

/***************************************************************************/

/**
 * PHP 8.0
 *
 * Less boilerplate code to define and initialize properties.
 *
 */
class Point8
{
    public function __construct(
        public float $x,
        public float $y,
        public float $z
    )
    {
    }
}
