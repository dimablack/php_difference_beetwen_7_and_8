<?php

namespace App\php_before_8_1vs8_1;

/**
 * PHP < 8.1
 */
class Status
{
    const DRAFT = 'draft';
    const PUBLISHED = 'published';
    const ARCHIVED = 'archived';
}

function acceptStatus(string $status)
{
    // ...
}

/***************************************************************************/

/**
 * PHP 8.1
 *
 * Use enum instead of a set of constants and get validation out of the box.
 *
 */

enum Status8_1
{
    case Draft;
    case Published;
    case Archived;
}

function acceptStatus8_1(Status $status)
{
    // ...
}
