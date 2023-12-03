<?php

namespace App\php_before_8_1vs8_1;

/**
 * PHP < 8.1
 */

function redirect(string $uri) {
    header('Location: ' . $uri);
    exit();
}

function redirectToLoginPage() {
    redirect('/login');
    echo 'Hello'; // <- dead code
}

/***************************************************************************/

/**
 * PHP 8.1
 *
 * A function or method declared with the never type indicates that it will not return a value and will either
 * throw an exception or end the script’s execution with a call of die(), exit(), trigger_error(), or something similar.
 *
 */

function redirect_8_1(string $uri): never {
    header('Location: ' . $uri);
    exit();
}

function redirectToLoginPage_8_1(): never {
    redirect('/login');
    echo 'Hello'; // <- dead code detected by static analysis
}
