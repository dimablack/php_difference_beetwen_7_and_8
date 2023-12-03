<?php

namespace App\php_before_8_1vs8_1;

/**
 * PHP < 8.1
 */

$httpClient->request('https://example.com/')
    ->then(function (Response $response) {
        return $response->getBody()->buffer();
    })
    ->then(function (string $responseBody) {
        print json_decode($responseBody)['code'];
    });

/***************************************************************************/

/**
 * PHP 8.1
 *
 * Fibers are primitives for implementing lightweight cooperative concurrency.
 * They are a means of creating code blocks that can be paused and resumed like Generators, but from anywhere in the stack.
 * Fibers themselves don't magically provide concurrency, there still needs to be an event loop.
 * However, they allow blocking and non-blocking implementations to share the same API.
 *
 * Fibers allow getting rid of the boilerplate code previously seen with Promise::then() or Generator based coroutines.
 * Libraries will generally build further abstractions around Fibers, so there's no need to interact with them directly.
 *
 */

$response = $httpClient->request('https://example.com/');
print json_decode($response->getBody()->buffer())['code'];
