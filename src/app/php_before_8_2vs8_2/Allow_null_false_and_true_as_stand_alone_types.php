<?php

namespace App\php_before_8_2vs8_2;

/**
 * PHP < 8.2
 */
class Falsy
{
    public function almostFalse(): bool
    {
    }

    public function almostTrue(): bool
    {
    }

    public function almostNull(): string|null
    {
    }
}

/***************************************************************************/

/**
 * PHP 8.2
 *
 *
 *
 */
class Falsy8_2
{
    public function alwaysFalse(): false
    {
    }

    public function alwaysTrue(): true
    {
    }

    public function alwaysNull(): null
    {
    }
}
