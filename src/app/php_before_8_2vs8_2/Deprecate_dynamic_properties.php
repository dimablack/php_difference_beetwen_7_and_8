<?php

namespace App\php_before_8_2vs8_2;

/**
 * PHP < 8.2
 */

class User
{
    public $name;
}

$user = new User();
$user->last_name = 'Doe';

$user = new stdClass();
$user->last_name = 'Doe';

/***************************************************************************/

/**
 * PHP 8.2
 *
 * The creation of dynamic properties is deprecated to help avoid mistakes and typos, unless the class opts
 * in by using the #[\AllowDynamicProperties] attribute. stdClass allows dynamic properties.
 *
 * Usage of the __get/__set magic methods is not affected by this change.
 *
 */

class User8_2
{
    public $name;
}

$user = new User8_2();
$user->last_name = 'Doe'; // Deprecated notice

$user = new stdClass();
$user->last_name = 'Doe'; // Still allowed

#[\AllowDynamicProperties]
class User8_2_v2
{
    public $name;
}

$user = new User8_2_v2();
$user->last_name = 'Doe'; // Allow with Attribute

$user = new stdClass();
$user->last_name = 'Doe'; // Still allowed
