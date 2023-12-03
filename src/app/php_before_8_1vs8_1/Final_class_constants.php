<?php

namespace App\php_before_8_1vs8_1;

/**
 * PHP < 8.1
 */

class Foo
{
    public const XX = "foo";
}

class Bar extends Foo
{
    public const XX = "bar"; // No error
}

/***************************************************************************/

/**
 * PHP 8.1
 *
 * It is possible to declare final class constants, so that they cannot be overridden in child classes.
 *
 */

class Foo_8_1
{
    final public const XX = "foo";
}

class Bar_8_1 extends Foo_8_1
{
    public const XX = "bar"; // Fatal error
}
