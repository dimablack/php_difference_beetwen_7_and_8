<?php

namespace App\php_before_8_1vs8_1;

/**
 * PHP < 8.1
 */
class Service
{
    private Logger $logger;

    public function __construct(
        ?Logger $logger = null,
    )
    {
        $this->logger = $logger ?? new NullLogger();
    }
}

// Attributes
class User
{
    /**
     * @Assert\All({
     *     @Assert\NotNull,
     *     @Assert\Length(min=5)
     * })
     */
    public string $name = '';
}

/***************************************************************************/

/**
 * PHP 8.1
 *
 * Objects can now be used as default parameter values, static variables, and global constants, as well as in attribute arguments.
 *
 * This effectively makes it possible to use nested attributes.
 *
 */
class Service8_1
{
    private Logger $logger;

    public function __construct(
        Logger $logger = new NullLogger(),
    ) {
        $this->logger = $logger;
    }
}

// Attributes

class User8_1
{
    #[\Assert\All(
        new \Assert\NotNull,
        new \Assert\Length(min: 5))
    ]
    public string $name = '';
}


class NullLogger
{

}
