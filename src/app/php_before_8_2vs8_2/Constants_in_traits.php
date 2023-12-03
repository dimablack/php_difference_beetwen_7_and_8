<?php

namespace App\php_before_8_2vs8_2;

/**
 * PHP < 8.2
 */



/***************************************************************************/

/**
 * PHP 8.2
 *
 * You cannot access the constant through the name of the trait,
 * but, you can access the constant through the class that uses the trait.
 *
 */

trait Foo
{
    public const CONSTANT = 1;
}

class Bar
{
    use Foo;
}

var_dump(Bar::CONSTANT); // 1
var_dump(Foo::CONSTANT); // Error
