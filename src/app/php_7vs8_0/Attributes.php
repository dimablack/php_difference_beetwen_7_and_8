<?php

namespace App\php_7vs8_0;

$string = 'some_string';

/**
 * PHP 7
 */
class PostController7
{
    /**
     * @Route("/api/posts/{id}", methods={"GET"})
     */
    public function get($id)
    {
        //
    }
}

/***************************************************************************/

/**
 * PHP 8.0
 *
 * Instead of PHPDoc annotations, you can now use structured metadata with PHP's native syntax.
 *
 */
class PostController8
{
    #[Route("/api/posts/{id}", methods: ["GET"])]
    public function get($id)
    {
        //
    }
}
