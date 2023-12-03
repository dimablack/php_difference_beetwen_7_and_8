<?php

namespace App\php_before_8_3vs8_3;

/**
 * PHP < 8.3
 */

php -l foo.php bar.php
No syntax errors detected in foo.php

/***************************************************************************/

/**
 * PHP 8.3
 *
 * The command line linter now accepts variadic input for filenames to lint
 *
 */

php -l foo.php bar.php
No syntax errors detected in foo.php
No syntax errors detected in bar.php
