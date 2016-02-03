<?php

declare(strict_types = 1);

namespace second_iteration\map_solution;

class Play
{
    /** @var string */
    private $left;

    /** @var string */
    private $right;

    /**
     * Play constructor.
     * @param string $left
     * @param string $right
     */
    public function __construct(string $left, string $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    public function __toString():string
    {
        return $this->left . $this->right;
    }
}