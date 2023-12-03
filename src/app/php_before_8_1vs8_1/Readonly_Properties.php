<?php

namespace App\php_before_8_1vs8_1;

/**
 * PHP < 8.1
 */
class BlogData
{
    private Status $status;

    public function __construct(Status $status)
    {
        $this->status = $status;
    }

    public function getStatus(): Status
    {
        return $this->status;
    }
}

/***************************************************************************/

/**
 * PHP 8.1
 *
 * Readonly properties cannot be changed after initialization, i.e. after a value is assigned to them.
 * They are a great way to model value objects and data-transfer objects.
 *
 */
class BlogData8_1
{
    public readonly Status $status;

    public function __construct(Status $status)
    {
        $this->status = $status;
    }
}
