<?php

namespace App\php_before_8_2vs8_2;

/**
 * PHP < 8.2
 */

class BlogData
{
    public readonly string $title;

    public readonly Status $status;

    public function __construct(string $title, Status $status)
    {
        $this->title = $title;
        $this->status = $status;
    }
}

/***************************************************************************/

/**
 * PHP 8.2
 *
 *
 *
 */

readonly class BlogData8_2
{
    public string $title;

    public Status $status;

    public function __construct(string $title, Status $status)
    {
        $this->title = $title;
        $this->status = $status;
    }
}
