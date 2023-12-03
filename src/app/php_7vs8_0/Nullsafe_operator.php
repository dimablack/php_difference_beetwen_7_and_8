<?php

namespace App\php_7vs8_0;

/**
 * PHP 7
 */

$country = null;

if ($session !== null) {
    $user = $session->user;

    if ($user !== null) {
        $address = $user->getAddress();

        if ($address !== null) {
            $country = $address->country;
        }
    }
}

/***************************************************************************/

/**
 * PHP 8.0
 *
 * Instead of null check conditions, you can now use a chain of calls with the new nullsafe operator.
 * When the evaluation of one element in the chain fails, the execution of the entire chain aborts
 * and the entire chain evaluates to null.
 *
 */

$country = $session?->user?->getAddress()?->country;
